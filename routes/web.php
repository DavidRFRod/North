<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Fornecedores', function () {
    return view('ListaFornecedores');
});

Route::get('/transportadoras', 'TransportadoraController@lista')->name('transportadora.index');
Route::get('/cadastrar-transportadora', 'TransportadoraController@cadastrar')->name('cadastrar.transportadora');
Route::post('/registrar-transportadora', 'TransportadoraController@Registrar')->name('transportadora.registrar');
Route::get('/alterar/transportadora/{IDTransportadora}', 'TransportadoraController@Alterar');
Route::post('/update/transportadora/{IDTransportadora}', 'TransportadoraController@Update');
Route::get('/delete/transportadora/{IDTransportadora}', 'TransportadoraController@Delete');

Route::get('/', function () {
    return view('welcome');
});
