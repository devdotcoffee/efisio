@extends('layout._layout')

@section('page', 'Inicio')

@section('style')
    <style>
        body {
            background: url("{{ asset('img/bkg-e-fisio.svg') }}") no-repeat center fixed;
            background-size: cover;
        }
        #logo-login {
            width: 100%;
        }
        .card {
            margin-top: 2%;
            margin-left: 5%; 
        }
        .nav-item > a {
            text-align: left;
            font-size: 10pt;
            color: #000;
            font-weight: bold;
        }
        .nav-item > a:hover {
            margin-left: 10px;
        }
        .logoutBtn {
            background-color: #D86A6A;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .indexBtn {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            background-color: #B8B8B8; 
        }
        .bodyBtn {
            background-color: #fff;
        }
        ul {
            border-radius: 4px;
        }
    </style>
@endsection
@section('content')
    <div class="container d-flex flex-row">
        <div class="navDiv">
            <img id="logo-login" src="{{ asset('img/logo-e-fisio.svg') }}" alt="Logo e-fisio">
            <ul class="nav flex-column">
                <li class="nav-item indexBtn">
                  <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item bodyBtn">
                    <a class="nav-link" href="{{ route('paciente.index') }}">Pacientes</a>
                </li>
                <li class="nav-item bodyBtn">
                    <a class="nav-link" href="{{ route('prontuário.index') }}">Prontuários</a>
                </li>
                <li class="nav-item logoutBtn">
                  <a class="nav-link" href="#" aria-disabled="true">Sair</a>
                </li>
            </ul>              
        </div>
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Bem-vindo Erick</h2>
                <hr>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae voluptas eveniet libero quo inventore eius, adipisci beatae reprehenderit odio tenetur provident impedit quia commodi atque iure qui minus dolorem quasi.</p>
            </div>
        </div>
    </div>
@endsection