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

Route::get('/test', 'HomeController@showWelcome');
Route::get('/dude', 'HomeController@dude');
Route::get('/hey', 'HomeController@hey');
Route::get('/nice', 'HomeController@nice');

Route::get('/', function ()
{
	return View::make('hello');
});

Route::get('/hello', function ()
{
	return App::environment();
});