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
                <button class="btn btnForm" id="btnFormPaciente" data-toggle="collapse" data-target="#collapsePaciente" role="button" aria-expanded="false" aria-controls="collapsePaciente">
                    Sou paciente
                </button>
                <button class="btn btnForm" id="btnFormFisio" type="button" data-toggle="collapse" data-target="#collapseFisio" aria-expanded="false" aria-controls="collapseFisio">
                    Sou fisio
                </button>
            </div>
        </div>
        <div class="collapse" id="collapsePaciente">
            <div class="card card-body w-50 mx-auto">
                <form method="GET" action="">
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input id="cpf" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="senhaPaciente">Senha:</label>
                        <input id="senhaPaciente" type="password" class="form-control">
                    </div>
                    <a href="{{ route('paciente.home') }}" class="btn btnForm w-100">Entrar</a>
                </form>
            </div>
        </div>
        <div class="collapse" id="collapseFisio">
            <div class="card card-body w-50 mx-auto">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="crefito">CREFITO:</label>
                        <input id="crefito" type="text" class="form-control" name="crefito">
                        @if ($errors->has('crefito'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('crefito') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input id="senha" type="password" class="form-control" name="password">
                        @if ($errors->has('senha'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('senha') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btnForm w-100">Entrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/login.js') }}"></script>
@endsection
