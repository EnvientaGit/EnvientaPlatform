<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', function () {
//    return view('20_platform.home');
//})->name('20_platform.home');

Route::get('/', 'CampaignController@show');
Route::get('/s/{filter}', 'CampaignController@show');

Route::get('/project', 'ProjectController@show');
Route::post('/project/new', 'ProjectController@newProject');

//cache disabled for development 
//Route::middleware('page-cache')->get('/project/{id}', 'ProjectController@show');
Route::get('/project/{id}', 'ProjectController@show');


Route::get('/auth/requestPin', 'LoginController@requestPin');
Route::get('/auth/login', 'LoginController@login');
Route::get('/auth/logout', 'LoginController@logout');
