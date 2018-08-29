<?php


Route::get('/', 'UsuariosController@index');

Route::post('/encuesta1','UsuariosController@store');
Route::post('/encuesta1/solvexencuesta1','EncuestaController@storeP1');
Route::post('/encuesta1/solvexencuesta2','EncuestaController@storeP2');

Route::resource('encuesta','UsuariosController');