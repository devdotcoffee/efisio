@extends('layout._layout')

@section('page', ' Fisio - Editar')

@section('style')
    <style>
        body {
            background: url("{{ asset('img/bkg-e-fisio.svg') }}") no-repeat center fixed;
            background-size: cover;
        }
        .card-header {
            background-color: transparent;
        }
        .btn-dark {
            border: 2px solid #5B5B5B !important;
            color: #5B5B5B;
            background-color: transparent;
            font-weight: 500;
        }
        .btn-dark:hover {
            background-color: #5B5B5B;
            color: #fff !important;
            border: 2px solid #fff !important;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .btn-dark:active {
            background-color: #5B5B5B !important;
            color: #fff !important;
            border: 2px solid #fff !important;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .error-message {
            color: #ff0000;
        }
    </style>
@endsection

@section('fisio')
<div class="container">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-header">
            <h3>Editar dados - {{ $fisio['nome']}}</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('editar-cadastro-fisio', $fisio['idFisioterapeuta']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-4">
                            <label for="fisioNome">Nome:</label>
                        </div>
                        <div class="col-4">
                            <label for="fisioNascimento">Data de Nascimento:</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-4">
                            <input class="form-control @error('fisioNome') is-invalid @enderror" type="text" name="fisioNome" id="fisioNome" value="{{ $fisio['nome'] }}">
                            @error('fisioNome')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-4">
                            <input class="form-control @error('fisioNascimento') is-invalid @enderror" type="date" name="fisioNascimento" id="fisioNascimento" value="{{ $fisio['data_nascimento'] }}">
                            @error('fisioNascimento')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-6">
                            <label for="fisioCrefito">CREFITO N°:</label>
                        </div>
                        <div class="col-6">
                            <label for="fisioCpf">CPF:</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-6">
                            <input class="form-control @error('fisioCrefito') is-invalid @enderror" type="text" name="fisioCrefito" id="fisioCrefito" value="{{ $fisio['crefito'] }}">
                            @error('fisioCrefito')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-6">
                            <input class="form-control @error('fisioCpf') is-invalid @enderror" type="text" name="fisioCpf" id="fisioCpf" value="{{ $fisio['cpf'] }}">
                            @error('fisioCpf')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="btn btn-dark" type="submit">
                    Editar
                </button>
            </form>
        </div>
    </div>
  </div>
@endsection