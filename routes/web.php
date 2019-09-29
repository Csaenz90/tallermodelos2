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

Route::get('/', function () {
    return view('welcome');
});

Route::get('departamento', 'DepartamentoController@index');
Route::get('obtenerPredios', 'DepartamentoController@obtenerPredios');
Route::post('departamento', 'DepartamentoController@store');

Route::get('predio', 'PredioController@index');
Route::post('predio', 'PredioController@store');

Route::get('solicitante', 'SolicitanteController@index');
Route::post('solicitante', 'SolicitanteController@store');
Route::post('guardarPredios', 'SolicitanteController@guardarPredios');
Route::post('guardarSync', 'SolicitanteController@guardarSync');




