@extends('layout._layout')

@section('page', 'Cadastro Fisio')

@section('fisio')
<div class="container">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-header">
            <h3>Cadastro de Fisioterapeuta</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('post-cadastro-fisio') }}" method="POST" autocomplete="off">
                @csrf
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
                            <input class="form-control @error('fisioNome') is-invalid @enderror" type="text" name="fisioNome" id="fisioNome" value="{{ old('fisioNome') }}">
                            @error('fisioNome')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-4">
                            <input class="form-control @error('fisioNascimento') is-invalid @enderror" type="date" name="fisioNascimento" id="fisioNascimento" value="{{ old('fisioNascimento') }}">
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
                            <label for="fisioCpf">CPF do Fisio:</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-6">
                            <input class="form-control @error('fisioCrefito') is-invalid @enderror" type="text" name="fisioCrefito" id="fisioCrefito" value="{{ old('fisioCrefito') }}" autocomplete="off">
                            @error('fisioCrefito')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-6">
                            <input class="form-control @error('fisioCpf') is-invalid @enderror" type="text" name="fisioCpf" id="fisioCpf" value="{{ old('fisioCpf') }}" autocomplete="off">
                            @error('fisioCpf')
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
                            <label for="fisioSenha">Senha de acesso:</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-6">
                            <input class="form-control @error('password') is-invalid @enderror " type="password" name="password" id="fisioSenha" value="">
                            @error('password')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <button class="btn btn-dark" type="submit">
                    Cadastrar
                </button>
            </form>
        </div>
    </div>
  </div>
@endsection