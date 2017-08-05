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

Route::get('playground', function() {
    return view('playground.main');
})->name('playground.main');

Route::get('campaign', function() {
    return view('playground.campaign');
})->name('playground.campaign');

Route::get('front', function() {
    return view('playground.FrontPage');
})->name('playground.FrontPage');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/project/{id}', 'ProjectController@show');