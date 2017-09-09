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

/* Static Links */

Route::get('/', function () {
    return view('welcome');
});

Route::get('project', function() {
    return view('project.main');
})->name('project.main');

Route::get('campaign', function() {
    return view('project.campaign');
})->name('project.campaign');

Route::get('front', function() {
    return view('page.front');
})->name('page.front');

Route::get('overview', function() {
    return view('project.overview');
})->name('project.overview');

Route::get('landing', function() {
    return view('page.landing');
})->name('page.landing');

Route::get('advertise', function() {
    return view('page.advertise');
})->name('page.advertise');

Route::get('personal', function() {
    return view('profile.personal');
})->name('profile.personal');

Route::get('purchase', function() {
    return view('project.purchase');
})->name('project.purchase');

// Route::get('login', function() {
//     return view('mail.login');
// })->name('mail.login');


//Auth::routes();
Route::post('/auth/login', 'LoginController@register');

Route::get('/auth/login', 'LoginController@login');

Route::get('/auth/logout', 'LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/projects/{id}', 'ProjectController@show');








