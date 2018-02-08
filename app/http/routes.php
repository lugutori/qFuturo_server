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

Route::get('/', function () {
	return view('welcome');
});

Route::get ('poopycastles', function(){
	return "Desarrollado por: Luis Guillermo Torres R.";
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get ('mobile/areas', 'MobileController@areasforapp');
Route::get ('mobile/{id}', 'MobileController@questionsforapp');

Route::get('mobileuser/register','MobileUserController@register');
Route::get('mobileuser/login','MobileUserController@dologin');
Route::get('mobileuser/password','MobileUserController@resetpassword');
Route::get('users','MobileUserController@index');

Route::get('api/dropdown/groups', 'DropdownController@groups');
Route::get('api/dropdown/categories', 'DropdownController@categories');

Route::resource('options','OptionController');
Route::resource('dimensions','DimensionController');
Route::resource('groups','GroupController');
Route::resource('categories','CategoryController');
Route::resource('questions','QuestionController');

Route::resource('areas','AreaController');
