<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class ProjectController extends Controller
{
    public function show($id)
    {
      $project = Project::findOrFail($id);
      return view('playground.main', $project);
    }
}
