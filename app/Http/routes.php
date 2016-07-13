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

Route::get('/', 'FrontController@index');
Route::get('/nosotros', 'FrontController@nosotros');
Route::get('/reviews', 'FrontController@reviews');
Route::get('/admin', 'FrontController@admin');
Route::get('/registro-marca', 'FrontController@registro_marca');
/*Route::get('categorias', 'CategoryController@index');
Route::get('categorias/create', 'CategoryController@create');
Route::post('categorias', 'CategoryController@store');
*/
Route::resource('categorias', 'CategoryController');
Route::resource('usuarios', 'UsuarioController');

Route::resource('log', 'LogController');
Route::get('logout', 'LogController@logout');

Route::resource('marcas', 'MarcasController');
