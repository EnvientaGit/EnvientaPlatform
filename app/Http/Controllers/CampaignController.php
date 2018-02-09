<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;

class CampaignController extends Controller
{
    public function show()
    {
    	$projects = DB::table('projects')->paginate(6);
      	return view('20_platform.campaign', array('projects' => $projects));
    }
}
