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

/**
*
* Routes for profiles and profiles actions
*/
Route::get('/profile', 'UserController@profile')->middleware('auth');

Route::post('/profile', 'UserController@avatar_upload')->middleware('auth');

/**
*
* Routes for admin options
*/

Route::group(['middleware' => 'role:administrator', 'prefix' => 'dashboard'], function(){

    Route::get(
        'users/list', 
        'AdminController@users_list');

    Route::post(
        'user/delete/{id}', 
        'AdminController@user_delete');
    
    Route::put('
        user/update/{id}', 
        'AdminController@user_update');

});
/**
*
* Routes for invite users
*/
Route::group(['prefix' => 'invite'], function () {

    Route::get(
    	'/send', [
    	'as'         => 'send',
        'middleware' => 'auth', 
    	'uses'       => 'UserController@user_invite_send']);

    Route::post(
    	'/sent', [
    	'as'         => 'sent',
        'middleware' => 'auth', 
    	'uses'       => 'UserController@user_invite_sent']);

    Route::get(
    	'/{refcode}', [
    	'as'         => 'accept',
        'middleware' => 'invite', 
    	'uses'       => 'UserController@user_invite_refcode']);

});

Route::auth();

Route::get('/home', 'HomeController@index');
