@extends('layout._layout')
@section('page', 'Login')

@section('style')
    <style>
        #logo-login {
            width: 25% !important;
        }
        #containerBtn {
            width: 50% !important;
        }
        .btnForm {
            background: #5B5B5B;
            border-radius: 4px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            color: #fff;
        }
        .btnForm:hover {
            color: #fff;
        }
        .btnForm:focus {
            box-shadow: 0 0 0 0.2rem #424242;

        }
        .card {
            margin: 1rem;
        }
        @media screen and (max-width: 700px) {
            #logo-login {
                width: 50% !important;
            }
            #containerBtn {
                width: 75% !important;
            }
            .card {
                width: 75% !important;
            }
        }
    </style>
@endsection
@section('login')
    <div class="container">
        <h1 class="text-center m-2">
            <img id="logo-login" src="{{ asset('img/logo-e-fisio.svg') }}" alt="Logo e-fisio">
        </h1>
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>            
        @endif
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="d-block m-auto" id="containerBtn">
            <div class="d-flex justify-content-around">
                <button class="btn btnForm" id="btnFormPaciente" data-toggle="collapse" data-target="#collapsePaciente" 
                    role="button" aria-expanded="false" aria-controls="collapsePaciente">
                    Sou paciente
                </button>
                <button class="btn btnForm" id="btnFormFisio" type="button" data-toggle="collapse" data-target="#collapseFisio" 
                    role="button" aria-expanded="false" aria-controls="collapseFisio">
                    Sou fisio
                </button>
            </div>
        </div>
        <div class="collapse" id="collapsePaciente">
            <div class="card card-body w-50 mx-auto">
                <form method="POST" action="{{ route('paciente-login') }}" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input id="cpf" type="text" class="form-control cpf" name="cpf" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btnForm w-100">Entrar</button>
                </form>
            </div>
        </div>
        <div class="collapse" id="collapseFisio">
            <div class="card card-body w-50 mx-auto">
                <form method="POST" action="{{ route('fisio-login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="crefito">CREFITO:</label>
                        <input id="crefito" type="text" class="form-control" name="crefito">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input id="senha" type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btnForm w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery-mask-plugin@1.14.16/dist/jquery.mask.min.js" integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/login.js') }}"></script>
@endsection
