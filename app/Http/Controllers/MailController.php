<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public static function sendPassword($paciente)
    {
        $data = [
            'route'         => route('view-senha', $paciente->id),
            'nome'          => $paciente->nome,
            'data_cadastro' => $paciente->data_cadastro
        ];
        Mail::send('mail', $data, function($message) use ($paciente){
            $message->from('devdotcoffee@gmail.com', 'Dev.Coffee');
            $message->to($paciente->email)->subject('Cadastrar senha - efisio');
        });
    }
}
