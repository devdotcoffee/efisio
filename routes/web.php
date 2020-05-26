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

Route::post('/login','Auth\LoginFisioController@login')->name('login');
Route::prefix('fisio')->group(function () {
    Route::namespace('Auth')->group(function(){
        
        //Login Routes
        Route::get('/login','LoginFisioController@loginForm');
        Route::post('/logout','LoginController@logout')->name('logout');
    
    });
    
    Route::get('/', 'FisioController@home')
        ->name('fisio.home');
        
    Route::get('lista-pacientes', 'PacienteController@index')
        ->name('lista-pacientes');
    
    Route::post('pacientes', 'PacienteController@store')
        ->name('post-cadastro-paciente');

    Route::get('detalhe-paciente/{id}', 'PacienteController@show')
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
    
    Route::get('editar-paciente/{id}', 'PacienteController@edit')
        ->name('editar-paciente');
    
    Route::put('editar-paciente/{id}', 'PacienteController@update')
        ->name('editar-cadastro-paciente');
    
    Route::get('prontuario/{id}', 'ProntuarioController@create')
        ->name('cadastro-prontuario');
    
    Route::get('lista-prontuarios', 'ProntuarioController@index')
        ->name('lista-prontuarios');

    Route::post('prontuario/{id}', 'ProntuarioController@store')
        ->name('post-cadastro-prontuario');

    Route::get('editar-prontuario/{id}', 'ProntuarioController@edit')
        ->name('editar-prontuario');
    
    Route::put('editar-prontuario/{id}', 'ProntuarioController@update')
        ->name('editar-cadastro-prontuario');

    Route::get('evolucoes/{id}', 'EvolucaoController@index')
        ->name('lista-evolucoes');
    
    Route::get('evolucao/{id}', 'EvolucaoController@create')
        ->name('cadastro-evolucao');
    
    Route::post('evolucao/{id}', 'EvolucaoController@store')
        ->name('post-cadastro-evolucao');

    Route::get('editar-evolucao/{id}', 'EvolucaoController@edit')
        ->name('editar-evolucao');

    Route::put('editar-evolucao/{id}', 'EvolucaoController@update')
        ->name('editar-cadastro-evolucao');
});

Route::prefix('paciente')->group(function () {
    Route::get('/', 'PacienteController@home')
        ->name('paciente.home');
});

Route::get('pdf-prontuario/{id}', 'PdfController@builderProntuario')
    ->name('pdf-prontuario');