<?php


Route::get('/','indexController@index');
Route::get('/cronometragem','CronometragemController@index');
Route::get('/cronometragem/get-tomada-tempo','CronometragemController@getTomadaTempo');
Route::get('/cronometragem/get-elementos','CronometragemController@getElementos');
Route::get('/cronometragem/guardar','CronometragemController@guardar');

//Route::get('cronos','cronosController@index');
//rotas crud
Route::resource('operacao','OperacaoController');
Route::resource('usuario','UsuarioController');
Route::resource('produto','ProdutoController');
Route::resource('elemento','ElementoController');
Route::resource('tomada-Tempo','TomadaTempoController');




