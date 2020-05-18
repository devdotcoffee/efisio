<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prontuario extends Model
{
    protected $table = 'prontuarios';
    
    public static function getProntuarioByPaciente($id)
    {
        return self::where('idPaciente', $id)->get();
    }
}
