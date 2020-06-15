@extends('layout._layout')

@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">
            Cadastrar senha
        </h5>
        <div class="card-body">
            <form action="{{ route('cadastrar-senha', $id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="senha">Senha:</label>
                    <input id="senha" name="password" type="password" class="form-control">
                    @error('password')
                        <small class="form-text text-muted error-message">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="senhaConfirma">Confirmação de senha:</label>
                    <input type="password" name="senhaConfirma" id="senhaConfirma" class="form-control">
                    @error('senhaConfirma')
                        <small class="form-text text-muted error-message">
                            {{ $message }}
                        </small>
                    @enderror
                </div>
                <button class="btn btn-dark w-100">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
@endsection