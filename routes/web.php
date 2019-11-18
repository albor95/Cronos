<?php


Route::get('/','indexController@index');
Route::get('/cronometragem','CronometragemController@index');
Route::get('/listar_elemento','SequenciaController@show');

//rotas crud
Route::resource('operacao','OperacaoController');
Route::resource('usuario','UsuarioController');
Route::resource('produto','ProdutoController');
Route::resource('elemento','SequenciaController');
Route::resource('tomada-Tempo','TomadaTempoController');



