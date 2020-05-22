@extends('layout._layout')

@section('page', 'Cadastrar Evolução')
    
@section('fisio')
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-header">
                <h3>Cadastro de Evolução</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('post-cadastro-evolucao', $prontuario) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="evolucaoData">Data:</label>
                            </div>
                            <div class="col-3">
                                <input class="form-control @error('evolucaoData') is-invalid @enderror" type="date" name="evolucaoData" id="evolucaoData">
                                @error('evolucaoData')
                                    <small class="form-text tex-muted error-message">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <label for="evolucaoDescricao">Descrição:</label>
                        </div>
                        <div class="form-row">
                            <textarea class="form-control @error('evolucaoDescricao') is-invalid @enderror" name="evolucaoDescricao" id="evolucaoDescricao" cols="30" rows="10">{{ old('evolucaoDescricao') }}</textarea>
                            @error('evolucaoDescricao')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
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