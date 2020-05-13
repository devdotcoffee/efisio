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
        
    Route::get('pacientes', 'PacienteController@index')
        ->name('lista-pacientes');
    
    Route::post('pacientes', 'PacienteController@store')
        ->name('cadastro-paciente');

    Route::get('paciente/{id}', 'PacienteController@show')
        ->name('detalhe-paciente');
});

Route::prefix('paciente')->group(function () {
    Route::get('/', 'PacienteController@indexPage')
        ->name('paciente.home');
});
