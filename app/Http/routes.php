<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'TricksController@index');

Route::model('tricks', 'Tricks');

Route::bind('tricks', function($value, $route) {
	return App\Tricks::whereSlug($value)->first();
});

Route::resource('tricks', 'TricksController');
