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
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/', function()
{
	return View::make('hello');
});


Route::resource('category', 'CategoryController');
Route::resource('post', 'PostController');
Route::resource('comment', 'CommentController');
Route::resource('posttag', 'PostTagController');
Route::resource('tag', 'TagController');
