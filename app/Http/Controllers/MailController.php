<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public static function send($paciente)
    {
        Mail::send('mail',['senha' => 'efisio'], function($m) use ($paciente){
            $m->from('devdotcoffee@gmail.com', 'Dev.Coffee');
            $m->to($paciente->email)->subject('Senha - efisio');
        });
    }
}
