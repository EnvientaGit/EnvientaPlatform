<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;

class CampaignController extends Controller
{
    public function show($filter = NULL)
    {
    	if($filter) {
    		$projects = Project::search($filter)->paginate(6);
    	} else {
    		$projects = DB::table('projects')->paginate(6);
    	}

      	return view('20_platform.campaign', array(
      		'projects' => $projects, 
      		'filter' => $filter
      	));
    }
}
