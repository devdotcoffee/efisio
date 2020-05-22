@extends('layout._layout')

@section('page', 'Editar Evolução')
    
@section('fisio')
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-header">
                <h3>Editar Evolução</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('editar-cadastro-evolucao', $evolucao['idEvolucao']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="evolucaoData">Data:</label>
                            </div>
                            <div class="col-3">
                                <input class="form-control @error('evolucaoData') is-invalid @enderror" type="date" name="evolucaoData" id="evolucaoData" value="{{ $evolucao['data'] }}">
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
                            <textarea class="form-control @error('evolucaoDescricao') is-invalid @enderror" name="evolucaoDescricao" id="evolucaoDescricao" cols="30" rows="10">{{ $evolucao['descricao'] }}</textarea>
                            @error('evolucaoDescricao')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
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