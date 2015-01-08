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
	$projects = Project::orderBy('rating', 'DESC')->get();
	
	return View::make('front')->with('projects', $projects);
});

Route::get('/about', function()
{
	return View::make('about');
});

Route::get('/cv', function()
{
	return View::make('cv');
});

Route::resource('/projects', 'ProjectController');

// Route::get('/projects/{id}', 'ProjectController@show');

Route::get('/contact', 'ContactController@index');

Route::post('/contact', 'ContactController@create');

// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');


Route::resource('userpanel/dashboard', 'DashboardController');

Route::resource('userpanel/nerds', 'NerdController');

Route::when('userpanel/*', 'auth');