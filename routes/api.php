<?php

use Illuminate\Http\Request;

use App\Project;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('projects', function() {
  return Project::all();
});

Route::get('projects/{id}', function($id) {
  return Project::findOrFail($id);
});

Route::get('projects/{id}/title', function($id) {
  return Project::findOrFail($id)->title;
});

Route::post('projects/{id}/title', function(Request $request, $id) {
  $project = Project::findOrFail($id);
  $project->title = $request->title;
  $project->save();
  
  return $project;
});