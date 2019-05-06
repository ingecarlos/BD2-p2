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



Route::get('usuario/add','usuarioController@create');
Route::post('usuario/add','usuarioController@store');
Route::get('usuario','usuarioController@index');
Route::post('usuario/buscar','usuarioController@buscar');
Route::get('usuario/edit/{id}','usuarioController@edit');
Route::post('usuario/edit/{id}','usuarioController@update');
Route::delete('usuario/{id}','usuarioController@destroy');


Route::get('producto/add','productoController@create');
Route::post('producto/add','productoController@store');
Route::get('producto','productoController@index');
Route::post('producto/buscar','productoController@buscar');
Route::get('producto/edit/{id}','productoController@edit');
Route::post('producto/edit/{id}','productoController@update');
Route::delete('producto/{id}','productoController@destroy');