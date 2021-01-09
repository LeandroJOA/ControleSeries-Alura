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

// Chama o controller "SeriesController" acionando a função "index" e adiciona "listar_series" como nome desta rota
Route::get('/series', 'SeriesController@index')->name('listar_series');
// Chama a função "create" do controller "SeriesController" quando esta rota é acessada
Route::get('/series/criar', 'SeriesController@create');
// Chama a função "store" do controller "SeriesController" e adiciona "form_criar_serie" como nome desta rota
Route::post('/series/criar', 'SeriesController@store')->name('form_criar_serie');
// Chama a fução "destroy" atraves do metodo "delete"
Route::delete('/series/{id}', 'SeriesController@destroy');
