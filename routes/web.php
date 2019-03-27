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

Route::get('/', ['as' => 'home' , 'uses' => 'UsersController@index']);

Route::get('/remover/{id}', ['as' => 'remover', 'uses' => 'UsersController@remover']);

Route::post('/salvar', ['as' => 'salvar', 'uses' => 'UsersController@salvar']);

Route::get('/editar/{id}', ['as' => 'editar', 'uses' => 'UsersController@editar']);

Route::put('/atualizar/{id}',['as'=>'atualizar','uses'=>'UsersController@atualizar']);

Route::get('/pdf',['as'=>'pdf','uses'=>'UsersController@gerarPDF']);