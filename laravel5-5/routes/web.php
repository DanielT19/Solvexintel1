<?php


Route::get('/', 'UsuariosController@index');

Route::post('/encuesta1','UsuariosController@store');
Route::post('/encuesta1/reponder','UsuariosController@saveenc');

Route::resource('encuesta','UsuariosController');