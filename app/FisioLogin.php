<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;

class FisioLogin extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'idUsuarioFisio';
    protected $table = "usuario_fisio";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'crefito', 'password'
    ];

    /** 
     * Método para salvar cadastro de usuário de Fisioterapeuta
     * 
     * @param array $fisio
    */
    public static function salvar(Array $fisio)
    {
        $login = new FisioLogin();
        $login->crefito             = $fisio['crefito'];
        $login->password            = Hash::make($fisio['password']);
        $login->idFisioterapeuta    = $fisio['id'];
        $login->permissao           = $fisio['permissao'];
        $login->save();
    }

    /**
     * Método para retorno de dados de usuário de acordo com ID de fisioterapeuta
     * 
     * @param int $id
     */
    public static function getByFisio(int $id)
    {
        return self::where('idFisioterapeuta', $id)->first();
    }
}
