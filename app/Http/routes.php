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

Route::group(['prefix' => 'invitar', 'as' => 'invite'], function(){

	Route::get('/{refCode}', ['as' => '.accept', 'middleware' => 'reference', 'uses' => 'UserController@userRefCode']);
	Route::get('usuario/invitacion', ['as' => '.user.send', 'middleware' => 'role:administrator', 'uses' => 'UserController@sendRefCode']);
	Route::post('usuario/invitacion/enviada', ['as' => '.user.sent', 'middleware' => 'role:administrator', 'uses' => 'UserController@sentRefCode']);
	
});


// Registration Routes...
Route::get('registro', 
	['as' => '/register', 'middleware' => 'reference', 'uses' => 'Auth\AuthController@showRegistrationForm']);

Route::post('registro', 
	['as' => '/register', 'uses' => 'Auth\AuthController@register']);


// Password Reset Routes...
Route::get('contraseña/restablecer/{token?}', 
	['as' => 'password.reset', 'uses' =>'Auth\PasswordController@showResetForm']);

Route::post('contraseña/email', 
	['as' => 'password.email', 'uses' => 'Auth\PasswordController@sendResetLinkEmail']);

Route::post('contraseña/restablecer', 
	['as' => 'password.reset', 'uses' => 'Auth\PasswordController@reset']);


// Panel and user functions
Route::group(['prefix' => 'home', 'as' => 'home', 'middleware' => 'auth'], function(){
	
	// user crud
	Route::get('usuario', ['as' => '.user.index', 'middleware' => 'role:administrator', 'uses' => 'UserController@index']);
	Route::get('usuario/{id}', ['as' => '.user.show', 'middleware' => 'role:administrator', 'uses' => 'UserController@show']);
	Route::delete('usuario/{id}', ['as' => '.user.delete', 'middleware' => 'role:administrator', 'uses' => 'UserController@destroy']);
	Route::put('usuario/{id}', ['as' => '.user.update', 'middleware' => 'role:administrator', 'uses' => 'UserController@update']);
	Route::get('usuario/{id}', ['as' => '.user.edit', 'middleware' => 'role:administrator', 'uses' => 'UserController@edit']);
	
	Route::resource('articulo', 'PostController');
});

// post function


// home route
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);