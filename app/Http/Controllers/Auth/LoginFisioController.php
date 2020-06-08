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
            'password' => 'required',
        ];

        $messages = [
            'crefito.required' => 'CREFITO é necessário',
            'password.required' => 'Senha é necessária',
        ];

        $request->validate($rules, $messages); 
    }

    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Erro no login, tente novamente.');
    }

    public function login(Request $request)
    {
        $this->validator($request);

        if(Auth::guard('fisio')->attempt($request->only('crefito', 'password'))){
            //Authentication passed
            return redirect()
                ->route('fisio.home');
        }

        //Authentication failed
        return $this->loginFailed();
    
    }

    public function logout()
    {
        Auth::guard('fisio')->logout();
        return redirect()
            ->route('tela-login')
            ->with('status', 'Fisio saiu!');
    }

}
