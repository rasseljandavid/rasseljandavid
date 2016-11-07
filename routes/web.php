<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/', function () { return view('pages.home'); });
Route::get('/projects', function () { return view('pages.projects'); });
Route::get('/services', function () { return view('pages.services'); });
Route::get('/contact', function () { return view('pages.contact'); });
Route::get('/about', function () { return view('pages.about'); });


Auth::routes();

Route::post('/subscribe', 'HomeController@subscribe');
