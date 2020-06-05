<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\FisioLogin;

class Fisio extends Model
{
    protected $table = 'fisioterapeutas';

    public static function todos()
    {
        return self::paginate(10);
    }

    public static function salvar($request)
    {
        $fisio = new Fisio();
        $fisio->nome            = $request->input('fisioNome');
        $fisio->data_nascimento = $request->input('fisioNascimento');
        $fisio->crefito         = $request->input('fisioCrefito');
        $fisio->cpf             = $request->input('fisioCpf');
        $fisio->save();

        FisioLogin::salvar([
            'id'        => $fisio->id,
            'crefito'   => $fisio->crefito, 
            'password'  => $request->input('password'),
            'permissao' => $request->input('fisioPermissao') 
        ]);

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
