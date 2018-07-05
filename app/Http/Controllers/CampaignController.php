<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;
use Illuminate\Support\Facades\DB;

class CampaignController extends Controller
{
    public function show(Request $request, $filter = NULL, $userId = null)
    {
    	if($filter) {
    		$projects = Project::search($filter)->paginate(6);
    	} elseif ($userId) {
        $user = User::findOrFail($userId);
        $projects = $user->projects()->paginate(6);  
      } else {
    		$projects = DB::table('projects')->paginate(6);
    	}

		  if ($request->ajax()) {
        return view('60_campaign.projects', array('projects' => $projects));
      }

      return view('20_platform.campaign', array(
      	'projects' => $projects, 
      	'filter' => $filter
      ));
    }

    public function showByUser(Request $request, $userId = null)
    {
      return $this->show($request, NULL, $userId);
    }

}
