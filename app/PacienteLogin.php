<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use App\Paciente;
use Hash;

class PacienteLogin extends Authenticatable
{
    use Notifiable;

    protected $table        = 'usuario_paciente';
    protected $primaryKey   = 'idUsuarioPaciente';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cpf', 'password'
    ];

    public static function salvar(Request $request, int $id)
    {
        $paciente               = Paciente::getPacienteById($id);
        $usuario                = new PacienteLogin();
        $usuario->cpf           = $paciente->cpf;
        $usuario->password      = Hash::make($request->input('password'));
        $usuario->idPaciente    = $id;
        $usuario->save();
    }
}
