<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'crefito', 'senha'
    ];
}
