<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = "paciente";
    
    public static function todos() {
        return self::all();
    }

    public static function salvar($request) {
        $paciente = new Paciente();
        $paciente->nome = $request->nome;
        $paciente->save();

        return $paciente;
    }
}
