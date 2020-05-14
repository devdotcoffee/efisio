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
    return view('login');
})->name('tela-login');

Auth::routes();

Route::prefix('fisio')->group(function () {
    Route::get('/', 'FisioController@indexPage')
        ->name('fisio.home');
        
    Route::get('lista-pacientes', 'PacienteController@index')
        ->name('lista-pacientes');
    
    Route::post('pacientes', 'PacienteController@store')
        ->name('post-cadastro-paciente');

    Route::get('paciente/{id}', 'PacienteController@show')
        ->name('detalhe-paciente');
    
    Route::get('lista-fisios', 'FisioController@index')
        ->name('lista-fisios');

    Route::get('cadastro', 'FisioController@create')
        ->name('cadastro-fisio');
    
    Route::post('cadastro', 'FisioController@store')
        ->name('post-cadastro-fisio');
    
    Route::get('editar/{id}', 'FisioController@edit')
        ->name('editar-fisio');
    
    Route::put('editar/{id}', 'FisioController@update')
        ->name('editar-cadastro-fisio');
});

Route::prefix('paciente')->group(function () {
    Route::get('/', 'PacienteController@home')
        ->name('paciente.home');
});
