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
    return view('blog.blog'); 
});


Route::get("/blog", function(){
	return view('blog.post');
});
// Authentication Routes...
Route::get('iniciar_sesion', 
	['as' => 'login', 'uses' => 'Auth\AuthController@showLoginForm']);

Route::post('iniciar_sesion',
	['as' => 'login', 'uses' =>'Auth\AuthController@login']);

Route::get('salir', 
	['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);


// Invitation Routes...
Route::group(['prefix' => 'invitar', 'as' => 'invite.'], function(){

	Route::get('usuario',
		['as' => 'user', 'middleware' => 'auth', 'uses' => 'User\UserController@sendRefCode']);

	Route::post('usuario',
		['as' => 'user', 'middleware' => 'auth', 'uses' => 'User\UserController@sentRefCode']);

	Route::get('/{refCode}',
		['as' => 'accept', 'middleware' => 'invite', 'uses' => 'User\UserController@userRefCode']);

});


// Registration Routes...
Route::get('registro', 
	['as' => '/register', 'middleware' => 'invite', 'uses' => 'Auth\AuthController@showRegistrationForm']);

Route::post('registro', 
	['as' => '/register', 'middleware' => 'invite', 'uses' => 'Auth\AuthController@register']);


// Password Reset Routes...
Route::get('contraseña/restablecer/{token?}', 
	['as' => 'password.reset', 'uses' =>'Auth\PasswordController@showResetForm']);

Route::post('contraseña/email', 
	['as' => 'password.email', 'uses' => 'Auth\PasswordController@sendResetLinkEmail']);

Route::post('contraseña/restablecer', 
	['as' => 'password.reset', 'uses' => 'Auth\PasswordController@reset']);


// Panel and user functions
Route::group(['prefix' => 'home', 'as' => 'home', 'middleware' => 'auth'], function(){
	
	// Admin function
	Route::get('usuarios', ['as' => '.users', 'uses' => 'User\UserController@index']);
	
	Route::get('usuarios/lista', ['as' => '.users.list', 'uses' => 'User\UserController@listing']);
	
	Route::get('usuario/{id}/editar', ['as' => '.user.edit', 'uses' => 'User\UserController@edit']);
	
	Route::put('usuario/{id}', ['as' => '.user.update', 'uses' => 'User\UserController@update']);
	
	Route::delete('usuario/{id}', ['as' => '.user.delete', 'uses' => 'User\UserController@destroy']);
	
});

// home route
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);