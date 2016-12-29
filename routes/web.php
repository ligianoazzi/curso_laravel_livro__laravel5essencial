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

Route::get('home', function () {
    return view('welcome');
});

/*Route::get('produtos', function(){
	return "olá seu produtero!";
});*/

Route::get('produtos_2', 'ProdutoController@index');

Route::get('produtos_3', 'ProdutoController3@index');

Route::get('welcome_2', function () {
    return view('welcome_2');
});


Route::get('/', 'ProdutoController4@index');

Route::group(['prefix'=>'produtos', 'where'=>['id'=>'[0-9]+']], function() {

 	Route::get('create',['as'=>'produtos.create', 'uses'=>'ProdutoController4@create']);

	Route::post('store',['as'=>'produtos.store', 'uses'=>'ProdutoController4@store']);

	Route::get('{id}/destroy',['as'=>'produtos.destroy', 'uses'=>'ProdutoController4@destroy']);

	Route::get('{id}/edit',['as'=>'produtos.edit', 'uses'=>'ProdutoController4@edit']);

	Route::put('{id}/update',['as'=>'produtos.update', 'uses'=>'ProdutoController4@update']);

});
