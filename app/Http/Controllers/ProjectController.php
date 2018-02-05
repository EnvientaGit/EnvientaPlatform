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

    private function generate_faq() {
      $parsedown = new \Parsedown();
      return $parsedown->text(file_get_contents(public_path() . "/repo/faq.md"));    
    }

    private function generate_project_faq($id) {
      $parsedown = new \Parsedown();
      return $parsedown->text(file_get_contents(public_path() . "/repo/$id/faq.md"));    
    }

    public function show()
    {
      // $project = Project::findOrFail($id);
      $project = new Project();

      return view('20_platform.project', array(
        'project' => $project, 
        'details' => 'xxx',
        'faq' => 'xxx',
        'project_faq' => 'xxx'));
    }

}
