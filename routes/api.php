<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/pacientes', 'PacienteController@storeAJAX')->name('api.paciente');
Route::post('/fisio', function () {
    return 'oi';
});
Route::delete('/fisio/{id}', 'FisioController@destroyAJAX')
    ->name('api-deleta-fisio');
Route::delete('/paciente/{id}', 'PacienteController@destroyAJAX')
    ->name('api-deleta-paciente');
Route::delete('prontuario/{id}', 'ProntuarioController@destroy')
    ->name('api-delete-prontuario');
Route::delete('evolucao/{id}', 'EvolucaoController@destroy')
    ->name('api-delete-evolucao');