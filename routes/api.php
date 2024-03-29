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

Route::get('api/v1/users','UserController@listarUsuarios');
Route::get('api/v1/users/{id}','UserController@consultarUsuario');
Route::post('api/v1/users','UserController@register');

Route::get('api/v1/cultivos','ProductoController@listarCultivos');
Route::get('api/v1/cultivos/{id}','UserController@consultarUsuario');
Route::post('api/v1/cultivos','ProductoController@register');

Route::get('api/v1/productos','ProductoController@listarProductos');
Route::get('api/v1/productos/{id}','UserController@consultarUsuario');
Route::post('api/v1/productos','ProductoController@register');

Route::get('api/v1/demandas','DemandaCultivoController@listarCultivos');
Route::get('api/v1/demandas/{id}','DemandaCultivoController@consultarUsuario');
Route::post('api/v1/demandas','DemandaCultivoController@register');