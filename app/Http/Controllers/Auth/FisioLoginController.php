<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FisioLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:fisio');
    }

    public function login(Request $request) {
        $credentials = [
            'crefito' => $request->input('crefito'),
            'password' => $request->input('password') 
        ];
        $authOk = Auth::guard('fisio')->attempt($credentials);

        if ($authOk) {
            return redirect()->intended(route('fisio.dashboard'));
        }

        return redirect()->route('fisio.dashboard');
    }

    public function index() {
        return view('login');
    }
}
