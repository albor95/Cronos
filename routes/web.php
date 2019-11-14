<?php


Route::get('/','indexController@index');
Route::get('/cronometragem','CronometragemController@index');

//rotas crud
Route::resource('operacao','OperacaoController');
Route::resource('usuario','UsuarioController');
Route::resource('produto','ProdutoController');
Route::resource('sequencia','SequenciaController');
Route::resource('tomada-Tempo','TomadaTempoController');



