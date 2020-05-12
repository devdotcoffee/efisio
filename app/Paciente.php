<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = "pacientes";
    
    public static function todos() {
        return self::all();
    }

    public static function salvar($request) {
        $paciente = new Paciente();
        $paciente->nome = $request->nome;
        $paciente->cpf = $request->cpf;
        $paciente->email = $request->email;
        $paciente->data_nascimento = $request->nascimento;
        $paciente->telefone = $request->telefone;
        $paciente->sexo = $request->sexo;
        $paciente->cidade = $request->cidade;
        $paciente->bairro = $request->bairro;
        $paciente->endereco_comercial = $request->endereco_comercial;
        $paciente->endereco_residencial = $request->endereco_residencial;
        $paciente->profissao = $request->profissao;
        $paciente->naturalidade = $request->naturalidade;
        $paciente->data_cadastro = $request->data_cadastro;
        $paciente->save();

        return $paciente;
    }

    public static function getPacienteById($id)
    {
        $paciente = Paciente::where('idPaciente', $id)->first();
        return $paciente;
    }
}
