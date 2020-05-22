<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evolucao extends Model
{
    protected $table = "evolucao";

    public static function getEvolucaoByProntuario($id)
    {
        return self::where('idProntuario', $id)->get();
    }

    public static function salvar($request, $prontuario)
    {
        $evolucao                   = new Evolucao();
        $evolucao->data             = $request->input('evolucaoData');
        $evolucao->descricao        = $request->input('evolucaoDescricao');
        $evolucao->idFisioterapeuta = 2;
        $evolucao->idProntuario     = $prontuario;
        $evolucao->save();

        return $evolucao;
    }

    public static function getEvolucaoById($id)
    {
        return Evolucao::where('idEvolucao', $id)->first();
    }

    public static function alterar($request, $id)
    {
        self::where('idEvolucao', $id)->update([
            'data'      => $request->input('evolucaoData'),
            'descricao' => $request->input('evolucaoDescricao')
        ]);

        return self::getEvolucaoById($id);
    }

    public static function deletar($id)
    {
        self::where('idEvolucao', $id)->delete();
    }
}
