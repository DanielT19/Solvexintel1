<?php


Route::get('/', 'UsuariosController@index');

Route::post('/encuesta1','UsuariosController@store');
Route::post('/encuesta1/solvexencuestap1','UsuariosController@storeP1');

Route::resource('encuesta','UsuariosController');