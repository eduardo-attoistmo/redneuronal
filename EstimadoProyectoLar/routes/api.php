<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['cors']], function () {
    Route::resource('detalles', 'detallesController');
    Route::resource('detalles1', 'detalles1Controller');
    Route::resource('detalleimpli', 'detalleimpliController');
    Route::resource('configurasalida', 'configuraSalidaController');
    Route::resource('configuraentrada', 'configuraEntradaController');
    Route::resource('salida', 'salidaController');
    Route::resource('entrada', 'entradaController');

});

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
  
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});