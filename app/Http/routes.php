<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|post get put delete


Rou

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/



Route::resource('region','regionController');
Route::resource('ciudad','ciudadController');
Route::resource('mediopago','mediopagoController');
Route::resource('impuesto','impuestoController');
Route::resource('categoria','categoriaController');