<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\PacienteLogin;
use App\Prontuario;
use Validator;
use Auth;

class LoginPacienteController extends Controller
{
    public static function viewSenha(int $id)
    {
        return view('paciente.cadastrarSenha', ['id' => $id]);
    }
    private static function validData(Request $request) 
    {
        $rules = [
            'password'          => 'required',
            'senhaConfirma'     => 'required|same:password'
        ];

        $messages = [
            'password.required'         => 'A senha é necessária',
            'senhaConfirma.required'    => 'Confirmação de senha é necessária',
            'same'                      => 'As senhas não coincidem'
        ];

        $validation = Validator::make($request->all(), $rules, $messages);
        
        return $validation;
    }
    public static function cadastrarSenha(Request $request, $id)
    {
        $validation = self::validData($request);

        if ($validation->fails()) {
            return back()->withErrors($validation);
        } else {
            PacienteLogin::salvar($request, $id);
            return redirect()->route('tela-login');
        }
    }
    private function validator(Request $request)
    {
        $rules = [
            'cpf'       => 'required',
            'password'  => 'required'
        ];

        $messages = [
            'cpf.required'      => 'CPF é necessário',
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

        if(Auth::guard('paciente')->attempt($request->only('cpf', 'password'))){
            //Authentication passed
            return redirect()
                ->route('paciente.home');
        }

        //Authentication failed
        return $this->loginFailed();
    
    }
    public function logout()
    {
        Auth::guard('fisio')->logout();
        return redirect()
            ->route('tela-login')
            ->with('status', 'Paciente saiu!');
    }
}
