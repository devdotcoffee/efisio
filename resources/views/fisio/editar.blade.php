@extends('layout._layout')

@section('page', ' Fisio - Editar')

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
                            <label for="fisioCpf">CPF do Fisio:</label>
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
                            <input class="form-control @error('fisioCpf') is-invalid @enderror cpf" type="text" name="fisioCpf" id="fisioCpf" value="{{ $fisio['cpf'] }}">
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
                            <label for="fisioSenha">Senha de Acesso:</label>
                        </div>
                        <div class="col-6">
                            <label for="fisioPermissao">Permissão de Acesso:</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <select class="form-control @error('fisioPermissao') is-invalid @enderror" name="fisioPermissao" id="fisioPermissao">
                                <option value="Padrão" {{ ($usuario['permissao'] == "Padrão" ? 'selected' : "") }}>Padrão</option>
                                <option value="Administrador" {{ ($usuario['permissao'] == "Administrador" ? "selected" : "") }} >Administrador</option>
                            </select>
                            @error('fisioPermissao')
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

@section('js')
<script src="https://cdn.jsdelivr.net/npm/jquery-mask-plugin@1.14.16/dist/jquery.mask.min.js" integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>
<script src="{{ asset('js/mask.js') }}"></script>
@endsection