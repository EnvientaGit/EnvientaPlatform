<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

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

    public function show($id = NULL)
    {
      if($id) {
        $project = Project::findOrFail($id);
        $details = $this->generate_details($id);
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

}
