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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('simulacao')->name('simulacao.')->group(function(){
    Route::get('index','SimulacaoEmprestimoController@index')->name('index');
    Route::get('instituicao','InstituicaoController@index')->name('instituicao');
    Route::get('convenio','ConvenioControlle@index')->name('convenio');
    Route::get('parcelas/{instituicao}/{convenio}','Taxa_InstituicaoController@index')->name('parcelas');
    Route::post('emprestimo','SimulacaoEmprestimoController@simular')->name('emprestimo');
});

