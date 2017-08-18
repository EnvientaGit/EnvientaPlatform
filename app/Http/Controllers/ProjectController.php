<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function show($id)
    {
      $project = Project::findOrFail($id);
      
      $parsedown = new \Parsedown();
      $faq = $parsedown->text(file_get_contents(public_path() . "/repo/$id/faq.md"));
      
      return view('project.overview', array(
	'project' => $project,
	'faq' => $faq
      ));
    }
}
