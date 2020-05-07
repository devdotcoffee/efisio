<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = "paciente";
    
    public static function todos() {
        return self::all();
    }

    public static function salvarPaciente($request) {
        $category = new Categoria();
        $category->nome = $request->input('categoryName');
        $category->save();
    }
}
