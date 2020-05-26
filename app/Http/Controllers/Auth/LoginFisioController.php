<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class LoginFisioController extends Controller
{
    public function loginForm()
    {
        return redirect()->route('tela-login');
    }

    private function validator(Request $request)
    {
        $rules = [
            'crefito'    => 'required',
            'senha' => 'required',
        ];

        $messages = [
            'crefito.required' => 'É necessário',
            'senha.required' => 'É necessário',
        ];

        $request->validate($rules, $messages); 
    }

    public function login(Request $request)
    {
        if(Auth::guard('fisio')->attempt($request->only('crefito', 'password'))){
            //Authentication passed...
            return redirect()
                ->route('fisio.home');
        }

        return redirect()->back()->with('error', 'Erro no login, tente novamente.');
    
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()
            ->route('tela-login');
    }

}
