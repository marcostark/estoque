<?php

Route::get('/', 'ProdutoController@lista');

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/detalhe/{id}', 'ProdutoController@detalhe');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');

//Route::get('/login','LoginController@form');
//Route::post('/login','LoginController@login');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');

