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
Route::get('about', function()
{
    return view('about');
});
Route::get('profil/{n}', 'UserController@profil');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('conteneur', 'ConteneurController');
Route::resource('navire', 'NavireController');
Route::resource('escale', 'EscaleController');
Route::resource('mouvement', 'MouvementController');

Route::model('navire', 'Task');


