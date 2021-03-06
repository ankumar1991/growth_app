<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'ContestController@getIndex');

Route::controller('dashboard', 'DashboardController');
Route::controller('contest', 'ContestController');
Route::get('contest-fb', 'ContestController@getHomeFb');

Route::controller('admin', 'AdminController');
Route::controller('contact', 'ContactController');
Route::controller('test', 'TestController');