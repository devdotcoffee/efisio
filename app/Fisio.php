<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fisio extends Model
{
    protected $table = 'fisioterapeutas';

    public static function todos()
    {
        return self::paginate(2);
    }

    public static function salvar($request)
    {
        $fisio = new Fisio();
        $fisio->nome = $request->input('fisioNome');
        $fisio->data_nascimento = $request->input('fisioNascimento');
        $fisio->crefito = $request->input('fisioCrefito');
        $fisio->cpf = $request->input('fisioCpf');
        $fisio->save();

        return $fisio;
    }

    public static function getFisioById($id)
    {
        return Fisio::where('idFisioterapeuta', $id)
            ->first();
    }

    public static function alterar($id, $request)
    {
        Fisio::where('idFisioterapeuta', $id)
            ->update([
                'nome'              => $request->input('fisioNome'),
                'data_nascimento'   => $request->input('fisioNascimento'),
                'crefito'           => $request->input('fisioCrefito'),
                'cpf'               => $request->input('fisioCpf')
            ]);
    }

    public static function deletar($id)
    {
        Fisio::where('idFisioterapeuta', $id)
            ->delete();
    }
}
