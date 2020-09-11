<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
	Route::resource('detalles', 'detallesController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detalles1', 'detalles1Controller');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('detalleimpli', 'detalleimpliController');
});

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
  
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

Route::group(['middleware' => ['web']], function () {
	Route::resource('entrada', 'entradaController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('salida', 'salidaController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('configuraentrada', 'configuraEntradaController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('configurasalida', 'configuraSalidaController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('salida', 'salidaController');
});
Route::group(['middleware' => ['web']], function () {
	Route::resource('configurasalida', 'configuraSalidaController');
});