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

Route::get('/', function () {
    return view('20_platform.home');
})->name('20_platform.home');

Route::get('/campaign', 'CampaignController@show')->name('20_platform.campaign');

Route::get('/project', 'ProjectController@show')->name('20_platform.project');

Route::get('/project/{id}', 'ProjectController@show')->name('20_platform.project');

// Route::get('layouts', function() {
//     return view('page.layouts');
// })->name('page.layouts');
