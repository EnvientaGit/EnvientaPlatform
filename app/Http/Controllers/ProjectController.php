<?php
namespace App\Http\Controllers;

use Cz\Git\GitRepository;
use Illuminate\Http\Request;
use App\Project;
use App\Member;
use App\User;
use App\Utils;
use Illuminate\Support\Facades\Mail;
use App\Mail\contributorInviteMail;
use App\ParsedownExtra;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
  private  $enabledMimes = array('image/png','image/gif','image/jpg','image/jpeg');
    
  private function getFolders($project_path) {
    $folders = array();  
    $folder_names = scandir($project_path);
    unset($folder_names[array_search('images', $folder_names)]);
    array_unshift($folder_names, 'images');
    foreach ($folder_names as $folder_name) {
      if(substr($folder_name, 0, 1) == '.')
        continue;
      $folder_path = $project_path . '/' . $folder_name;
      if(!is_dir($folder_path))
        continue;
      $files = array();
      $file_names = scandir($folder_path);
      foreach($file_names as $file_name) {
        if(substr($file_name, 0, 1) == '.')
          continue;
        $files[] = array(
          'name' => $file_name,
          'lastmod' => date ("Y-m-d", filemtime($folder_path . '/' . $file_name)),
          'size' => Utils::bytesToHuman(filesize($folder_path . '/' . $file_name))
        );
      }
      $folders[] = array(
        'name' => $folder_name,
        'files' => $files
      );
    }
    return $folders;
  }

  public function showFiles($slug) {
    $project = DB::table('projects')->where('slug', $slug)->first();
    $project_path = public_path() . "/repo/" . $slug;
    return mockView('50_project.51_tabs.blueprints', array(
      'project_url' => url("/project") . '/' . $slug,
      'repo_url' => url("/repo") . '/' . $slug, 
      'folders' => $this->getFolders($project_path),
      'mine' => Auth::check() ? $project->owner == Auth::user()->id : false
    ));
  }

  public function show(Request $request, $slug = NULL)
  {
    $project = Project::where('slug', $slug)->first();

    if(!$project->public)
      if(!$this->checkMembership(Auth::user(), $project))
        return redirect('/');

    $parsedown = new ParsedownExtra();

    $project_path = public_path() . "/repo/" . $project->slug;
    $images_path = $project_path . '/images';

    $image_urls = array();
    $images = scandir($images_path);
    foreach ($images as $image) {
      if($image == '.' || $image == '..')
        continue;
      $image_urls[] = url("/repo/" . $project->slug . '/images') . '/' . $image; 
    }  

    return mockView('20_platform.project', array(
      'project' => $project, 
      'project_url' => url("/project") . '/' . $project->slug,
      'repo_url' => url("/repo") . '/' . $project->slug, 
      'details' => $parsedown->text(file_get_contents($project_path . "/readme.md")),
      'details_raw' => file_get_contents($project_path . "/readme.md"),
      'images' => $image_urls,
      'folders' => $this->getFolders($project_path),
      'avatar_hash' => md5( strtolower( trim( $project->owner()->first()->email ) ) ),
      'tags' => $project->tags ? explode(' ', $project->tags) : array(), 
      'sessionid' => $request->session()->getId(), 
      'mine' => Auth::check() ? $project->owner == Auth::user()->id : false
    ));
  }

  private function slugify($string, $replace = array(), $delimiter = '-') {
    // https://github.com/phalcon/incubator/blob/master/Library/Phalcon/Utils/Slug.php
    if (!extension_loaded('iconv')) {
      throw new Exception('iconv module not loaded');
    }
    // Save the old locale and set the new locale to UTF-8
    $oldLocale = setlocale(LC_ALL, '0');
    setlocale(LC_ALL, 'en_US.UTF-8');
    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
    if (!empty($replace)) {
      $clean = str_replace((array) $replace, ' ', $clean);
    }
    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
    $clean = strtolower($clean);
    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
    $clean = trim($clean, $delimiter);
    // Revert back to the old locale
    setlocale(LC_ALL, $oldLocale);
    return $clean;
  }

  private function extractVideoId($video_link) {
    parse_str(parse_url($video_link, PHP_URL_QUERY), $params);
    if($params && $params['v'])
      return $params['v'];          
  }

  public function newProject(Request $request) {
    if (Auth::check()) {
      $project = new Project;
      $project->title = $request->title;
      $project->description = $request->description;
      $project->tags = $request->tags;
      $project->slug = $this->slugify($request->title) . '-' . uniqid();
      $project->license = 'xxx'; //$request->license;

      if($request->vid_link)
        $project->video_id = $this->extractVideoId($request->vid_link);

      Auth::user()->projects()->save($project);
      $project->save();

      $project_path = public_path() . "/repo/" . $project->slug;
     
      @mkdir($project_path, 0700, TRUE);
      
      GitRepository::init($project_path);
      file_put_contents($project_path . "/readme.md", '');
      // 'Click on the pencil on the right top side to edit this content.');

      $blueprints_path = $project_path . '/blueprints';
      @mkdir($blueprints_path, 0700, TRUE); 
      $images_path = $project_path . '/images';
      @mkdir($images_path, 0700, TRUE); 
      $images = $request->file('images');
      if (is_array($images)) {
          foreach ($images as $image) {
            if(Utils::checkFile($image, $this->enabledMimes))
              $image->move($images_path, $image->getClientOriginalName());
          }  
      }
      return mockRedirect(url('/project/' . $project->slug));
    }
  }

  public function listMembers($slug = NULL) {
      $project = Project::where('slug', $slug)->first();
      return mockView('30_sidebar.members', array(
          'project' => $project
      ));
  }
  
  private function checkMembership($user, $project) {
    if($user->isAdmin)
      return true;
    if($user->id == $project->owner)
      return true;
    return Member::where('user_id', $user->id)->where('project_id', $project->id)->first();
  }

  private function updateMembers(Request $request, $project) {
    if($request->has('addMember')) {
      $user = User::updateOrCreate(['email' => $request->input('addMember')], ['pin' => Utils::random_str(6)]);
      $member = new Member();
      $projectHasMember = $this->checkMembership($user, $project);
      if(!$projectHasMember) {
        $member->user_id = $user->id;
        $member->project_id = $project->id;
        $member->save();
        Mail::to($user->email)->send(new contributorInviteMail($user, $project->title, $project->slug));
        return 'done';
      } else {
        return 'already_member';
      }
    }

    if($request->has('removeMember')) {
      $member = Member::findOrFail($request->input('removeMember'));
      Member::destroy($member->id);
      return 'done';
    }

  }

  public function update(Request $request, $slug) {
      if (!Auth::check())
      return;

    $project = Project::where('slug', $slug)->first();
    if($project->owner != Auth::user()->id)
      return;

    $project_path = public_path() . "/repo/" . $project->slug;
    
    if ($request->has('folder') && !$request->has('delete')) {
      $folder = Utils::clearFolderName($request->input('folder'));
      @mkdir($project_path . '/' . $folder, 0700, TRUE);

      if ($request->has('files')) {
        $files = $request->file('files');
        foreach ($files as $file) {
          if ($folder == 'images') {
              if(Utils::checkFile($file, $this->enabledMimes))
                  $file->move($project_path . '/' . $folder, $file->getClientOriginalName());
          } else {
              if(Utils::checkFile($file))
                  $file->move($project_path . '/' . $folder, $file->getClientOriginalName());
          }
        }
      }
    }

    if($request->has('title')) {
      $project->title = $request->input('title');
      $project->save();
    }

    if($request->has('vid_link')) {
      $project->video_id = $this->extractVideoId($request->vid_link);
    }

    if($request->has('description')) {
      $project->description = $request->input('description');
      $project->save();
    }

    if($request->has('tags')) {
        $project->tags = $request->input('tags');
        $project->save();
    }
    if($request->has('projectStatus')) {
      $project->public = $request->input('projectStatus');
      $project->save();
    }

    if($request->has('details')) {
      $details = $request->input('details');
      file_put_contents($project_path . "/readme.md", $details);        
    }

    if($request->has('delete')) {
      $folder = Utils::clearFolderName($request->input('folder'));
      $file = Utils::clearFileName($request->input('file'));
      @unlink($project_path . '/' . $folder. '/' . $file);
    }

    if($updateMembersResult = $this->updateMembers($request, $project))
      return $updateMembersResult;

    if($request->has('redirect'))
      return mockRedirect(url('/project/' . $project->slug));
  }

  /*
   * 
   
   public function tasks(Request $request, $slug) {
      $project = DB::table('projects')->where('slug', $slug)->first();
      $project_path = public_path() . "/repo/" . $slug;
      return mockView('50_project.51_tabs.tasks', array(
          'projectid' => $project->id
      ));
  }
  */
}
