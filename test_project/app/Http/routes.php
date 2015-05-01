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

//Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

//routes for emotions
Route::get('emotions', 'EmotionController@index');
Route::get('emotion/create', 'EmotionController@create');
Route::post('emotion/store', 'EmotionController@store');
Route::get('emotion/{id}', 'EmotionController@show');
Route::get('emotion/{id}/edit', 'EmotionController@edit');
Route::post('emotion/{id}/update', 'EmotionController@update');
Route::get('emotion/{id}/delete', 'EmotionController@destroy');


//routes for wall

Route::get('/', 'WallController@index');
Route::get('wall/create', 'WallController@create');
Route::post('wall/store', 'WallController@store');
Route::get('wall/{id}', 'WallController@show');
Route::get('wall/{id}/edit', 'WallController@edit');
Route::post('wall/{id}/update', 'WallController@update');
Route::get('wall/{id}/delete', 'WallController@destroy');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
