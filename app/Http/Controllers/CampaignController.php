<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class CampaignController extends Controller
{
    public function show()
    {
    	$projects = Project::all();
      	return view('20_platform.campaign', array('projects' => $projects));
    }
}
