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
Route::auth();
Route::get('/', 'UserController@index');
Route::post('register', 'UserController@store');
Route::resource('lokasi', 'LocationController');
Route::get('peta', 'LocationController@map');
Route::get('api/v1/lokasi/', 'LocationController@allapi');
Route::get('api/v1/lokasi/{lokasi}', 'LocationController@api');