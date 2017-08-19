<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function show_faq_gen($id)
    {
      $project = Project::findOrFail($id);
      
      $parsedown = new \Parsedown();
      $faq_gen = $parsedown->text(file_get_contents(public_path() . "/repo/$id/faq_gen.md"));
      
      return view('project.overview', array('project' => $project, 'faq_gen' => $faq_gen));
    }

    // public function show_faq_pro_0($id)
    // {
    //   $project = Project::findOrFail($id);
      
    //   $parsedown = new \Parsedown();
    //   $faq_pro_0 = $parsedown->text(file_get_contents(public_path() . "/repo/$id/faq_pro_0.md"));
      
    //   return view('project.overview', array('project' => $project, 'faq_pro_0' => $faq_pro_0));
    // }
}
