@extends('layout._layout')

@section('page', 'Inicio')
    
@section('fisio')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">Bem vindo ao e-fisio</h3>
                @if(Auth::guard('fisio')->check())
                <h5 class="text-center">
                    CREFITO: {{ Auth::guard('fisio')->user()->crefito }}
                </h5>
                @endif
                <p class="text-center">O e-fisio é um sistema que possibilita o cadastro e gerenciamento de dados como: pacientes, prontuários e fisioterapêutas. Com o objetivo de controlar com segurança o acesso a dados e facilitar a consulta dos mesmos.</p>
                <a href="https://github.com/devdotcoffee">
                    <img class="mx-auto d-block" src="{{ asset('img/logo-devdot.png') }}" alt="Logo DevDotCoffee">
                </a>
            </div>
        </div>
    </div>
@endsection