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

Route::get('/profile', 'UserController@profile')->middleware('auth');

Route::post('/profile', 'UserController@avatar_upload')->middleware('auth');

Route::group(['as' => 'invite::'], function () {

    Route::get(
    	'invite/send', [
    	'as' => 'send', 
    	'uses' => 'UserController@user_invite_send'])->middleware('auth');
    Route::post(
    	'invite/sent', [
    	'as' => 'sent', 
    	'uses' => 'UserController@user_invite_sent'])->middleware('auth');
    Route::get(
    	'invite/{refcode}', [
    	'as' => 'accept', 
    	'uses' => 'UserController@user_invite_refcode'])->middleware('invite');

});

Route::auth();

Route::get('/home', 'HomeController@index');
