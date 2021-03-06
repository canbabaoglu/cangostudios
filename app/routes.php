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

Route::get('/', function()
{
	return View::make('landing');
});

Route::post('/', ['as' => 'prospects.store', 'uses' => 'ProspectController@store']);


// Route to help visualize the grid 
Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/emails/prospects/adminnotify', function()
{
	return View::make('emails.prospects.adminnotify');
});
