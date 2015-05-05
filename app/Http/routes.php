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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('all', 'WelcomeController@all');

Route::get('person/{name}', 'WelcomeController@show');

Route::get('age/{age}', 'WelcomeController@show_4_age');

Route::get('language/{language}', 'WelcomeController@show_4_language');

Route::post('new_group', ['as' => 'new_group', 'uses' => 'WelcomeController@store_group']);

// PERSONAS
Route::get	('which_person', 'WelcomeController@which_person');
Route::post	('which_person_go', ['as' => 'which_person_go', 'uses' => 'WelcomeController@which_person_go']);
Route::get	('which_person_id/{id}', 'WelcomeController@which_person_id');
Route::get	('which_language', 'WelcomeController@which_language');
Route::post	('which_language_go', ['as' => 'which_language_go', 'uses' => 'WelcomeController@which_language_go']);
Route::get	('which_age', 'WelcomeController@which_age');
Route::post	('which_age_go', ['as' => 'which_age_go', 'uses' => 'WelcomeController@which_age_go']);

// MENSAJES
Route::get	('write_message/{id}', 'WelcomeController@write_message');
Route::post	('send_message', ['as' => 'send_message', 'uses' => 'WelcomeController@send_message']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
