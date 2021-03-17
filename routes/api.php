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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ciudades', 'CiudadController@index');//listar
//Route::get('/ciudades/create', 'CiudadController@create'); //crear
Route::post('/ciudades', 'CiudadController@store'); //registrar
Route::get('/ciudades/{id}/edit', 'CiudadController@edit'); //formulario edicion
Route::post('/ciudades/{id}/edit', 'CiudadController@update'); //actualizar
Route::delete('/ciudades/{id}', 'CiudadController@destroy'); //eliminar

Route::get('/estados', 'EstadoController@index');
Route::post('/estados/store','EstadoController@store');
Route::get('/estados/{id}/edit', 'EstadoController@edit'); //formulario edicion
Route::post('/estados/{id}/edit', 'EstadoController@update'); //actualizar
Route::delete('/estados/{id}', 'EstadoController@destroy'); //eliminar

Route::get('/restricciones', 'RestriccionController@index');//listar
Route::post('/restricciones/store', 'RestriccionController@store'); //registrar
Route::get('/restricciones/{id}/edit', 'RestriccionController@edit'); //formulario edicion
Route::post('/restricciones/{id}/edit', 'RestriccionController@update'); //actualizar
Route::delete('/restricciones/{id}', 'RestriccionController@destroy'); //eliminar

Route::get('/discapacidades', 'DiscapacidadController@index');//listar
Route::post('/discapacidades/store', 'DiscapacidadController@store'); //registrar
Route::get('/discapacidades/{id}/edit', 'DiscapacidadController@edit'); //formulario edicion
Route::post('/discapacidades/{id}/edit', 'DiscapacidadController@update'); //actualizar
Route::delete('/discapacidades/{id}', 'DiscapacidadController@destroy'); //eliminar

Route::get('/categorias', 'CategoriaController@index');//listar
Route::post('/categorias/store', 'CategoriaController@store'); //registrar
Route::get('/categorias/{id}/edit', 'CategoriaController@edit'); //formulario edicion
Route::post('/categorias/{id}/edit', 'CategoriaController@update'); //actualizar
Route::delete('/categorias/{id}', 'CategoriaController@destroy'); //eliminar

Route::get('/servicios', 'ServicioController@index');//listar
Route::post('/servicios/store', 'ServicioController@store'); //registrar
Route::get('/servicios/{id}/edit', 'ServicioController@edit'); //formulario edicion
Route::post('/servicios/{id}/edit', 'ServicioController@update'); //actualizar
Route::delete('/servicios/{id}', 'ServicioController@destroy'); //eliminar

Route::get('/actividades', 'ActividadesController@index');//listar
Route::post('/actividades/store', 'ActividadesController@store'); //registrar
Route::get('/actividades/{id}/edit', 'ActividadesController@edit'); //formulario edicion
Route::post('/actividades/{id}/edit', 'ActividadesController@update'); //actualizar
Route::delete('/actividades/{id}', 'ActividadesController@destroy'); //eliminar
