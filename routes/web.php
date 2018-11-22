<?php

Route::view('/', "enunciado");

Route::get('/hoteles', 'HotelsController@index')
	->name('hoteles_index');

Route::get('/clientes', 'ClientesController@index')
	->name('clientes_index');
Route::get('/clientes/create', 'ClientesController@create')
	->name('clientes_create');
Route::post('/clientes/store', 'ClientesController@store')
	->name('clientes_store');

Route::get('/clientes/reservas/{id?}', 'ClientesController@reservas')
	->name('reservas_index');