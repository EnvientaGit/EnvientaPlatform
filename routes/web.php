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
    return view('20_platform.campaign');
})->name('20_platform.campaign');

Route::get('/project', function () {
    return view('20_platform.project');
})->name('20_platform.project');

// Route::get('layouts', function() {
//     return view('page.layouts');
// })->name('page.layouts');
