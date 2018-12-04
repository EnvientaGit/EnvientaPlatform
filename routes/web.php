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


Route::name('map')->get('/map', function () {
    return view('80_Pages.map');
});

Route::name('profile')->get('/profile', 'ProfileController@show');
Route::name('profile')->post('/profile', 'ProfileController@update');

Route::name('terms')->get('/terms', function () {
    return view('80_Pages.terms');
});

Route::name('privacy')->get('/privacy', function () {
    return view('80_Pages.privacy');
});

Route::name('cookies')->get('/cookies', function () {
    return view('80_Pages.cookies');
});

Route::name('shop')->get('/shop', function () {
    return view('80_Pages.shop');
});

Route::name('home')->get('/', 'CampaignController@show');
Route::name('search')->get('/s/{filter}', 'CampaignController@show');
Route::name('myprojects')->get('/profile/projects', 'CampaignController@showByUser');

Route::name('new_project')->post('/project/new', 'ProjectController@newProject');

//cache disabled for development
//Route::middleware('page-cache')->get('/project/{id}', 'ProjectController@show');
Route::name('project')->get('/project/{slug}', 'ProjectController@show');
Route::name('project_files')->get('/project/{slug}/files', 'ProjectController@showFiles');
Route::name('project_members')->get('/project/{slug}/members', 'ProjectController@listMembers');

Route::name('project_update')->post('/project/{slug}', 'ProjectController@update');

Route::name('requestPin')->get('/auth/requestPin', 'LoginController@requestPin');
Route::name('login')->get('/auth/login', 'LoginController@login');
Route::name('logout')->get('/auth/logout', 'LoginController@logout');

Route::name('fb_login')->get('/auth/fb_login', 'LoginController@loginWithFacebook');

Route::name('sendOrder')->get('/shop/sendOrder', 'ShopController@sendOrder');

//Route::get('/user/list', 'UserController@listUsers');
