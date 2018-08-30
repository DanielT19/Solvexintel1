<?php


Route::get('/', 'UsuariosController@index');
Route::get('resultados','UsuariosController@resultado');
Route::post('/','UsuariosController@store');
Route::post('/encuesta1','EncuestaController@storeP1');
Route::post('/encuesta2','EncuestaController@storeP2');
Route::post('/encuesta3','EncuestaController@storeP3');
Route::post('/encuesta4','EncuestaController@storeP4');
Route::post('/encuesta5','EncuestaController@storeP5');
Route::post('/encuesta6','EncuestaController@storeP6');
Route::post('/encuesta7','EncuestaController@storeP7');
Route::post('/encuesta8','EncuestaController@storeP8');
Route::post('/encuesta9','EncuestaController@storeP9');
Route::post('/encuesta10','EncuestaController@storeP10');
Route::post('/encuesta11','EncuestaController@storeP11');
Route::post('/encuesta12','EncuestaController@storeP12');
Route::post('/encuesta13','EncuestaController@storeP13');
Route::post('/encuesta14','EncuestaController@storeP14');
Route::post('/encuesta15','EncuestaController@storeP15');
Route::post('/encuesta16','EncuestaController@storeP16');
Route::post('/encuesta17','EncuestaController@storeP17');
Route::post('/encuesta18','EncuestaController@storeP18');



Route::resource('encuesta','UsuariosController');