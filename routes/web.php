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

// Chama o controller "SeriesController" acionando a função "index"
Route::get('/series', 'SeriesController@index');
// Chama a função "create" do controller "SeriesController" quando esta rota é acessada
Route::get('/series/criar', 'SeriesController@create');
// Chama a função "store" do controller "SeriesController"
Route::post('/series/criar', 'SeriesController@store');
