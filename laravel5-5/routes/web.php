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

Route::get('/', 'EncuestaController@home');
Route::post('/', 'EncuestaController@storeuser');

Route::resource('encuesta','EncuestaController@index');
Route::resource('encuesta','EncuestaController@resultados');
