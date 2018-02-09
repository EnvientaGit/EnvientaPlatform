<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    private function generate_details($id) {
      $parsedown = new \Parsedown();
      return $parsedown->text(file_get_contents(public_path() . "/repo/$id/details.md"));    
    }

    private function generate_faq($id) {
      $parsedown = new \Parsedown();
      return $parsedown->text(file_get_contents(public_path() . "/repo/$id/faq.md"));    
    }

    public function show($slug = NULL)
    {
      if($slug) {
        $project = DB::table('projects')->where('slug', $slug)->first();;
        $details = $this->generate_details($project->id);
      } else {
        $project = new Project();
        $details = 'xxx';
      }

      return view('20_platform.project', array(
        'project' => $project, 
        'details' => $details,
        'faq' => 'xxx',
        'project_faq' => 'xxx'));
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

    public function newProject(Request $request) {
      $project = new Project;
      $project->title = $request->title;
      $project->description = $request->description;
      $project->slug = $this->slugify($request->title) . '-' . uniqid();
      $project->save();
      return redirect('/project/' . $project->id);
    }

}
