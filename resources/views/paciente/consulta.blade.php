@extends('layout._layout')

@section('page', 'Cadastrar')

@section('style')
    <style>
        body {
            background: url("{{ asset('img/bkg-e-fisio.svg') }}") no-repeat center fixed;
            background-size: cover;
        }
        .card-header {
            background-color: transparent;
        }
    </style>
@endsection
@section('no-initial-page')
<div class="container">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-header">
            <h3>Lista de Paciente</h1>
        </div>
        <div class="card-body">
            @if (count($pacientes) > 0)
            <table class="table">
                <thead>
                    <th>
                        #
                    </th>
                    <th>
                        Paciente
                    </th>
                    <th>
                        CPF
                    </th>
                    <th>
                        Ações
                    </th>
                </thead>
                <tbody>
                    @foreach ($pacientes as $paciente)
                        <tr>
                            <td>
                                {{ $paciente['id'] }}
                            </td>
                            <td>
                                {{ $paciente['nome'] }}
                            </td>
                            <td>
                                {{ $paciente['cpf'] }}
                            </td>
                            <td>
                                <button class="btn">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <div class="alert alert-danger" role="alert">
                    <p class="alert-text text-center">
                        Não existem registros de pacientes cadastrados.
                    </p>
                </div>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastroPaciente">
                    Adicionar paciente
                </a>
            @endif
        </div>
    </div>
</div>

<div class="modal fade" id="cadastroPaciente" tabindex="-1" role="dialog" aria-labelledby="Cadastro de paciente" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cadastrar paciente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" method="POST" id="formPaciente">
                @csrf
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-2">
                            <label for="pacienteNome">Nome Completo:</label>
                        </div>
                        <div class="col-10">
                            <input id="pacienteNome" type="text" class="form-control @error('pacienteNome') is-invalid @enderror">
                            @error('pacienteNome')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>  
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-2">
                            <label for="pacienteCpf">CPF:</label>
                        </div>
                        <div class="col-10">
                            <input id="pacienteCpf" type="text" class="form-control @error('pacienteCpf') is-invalid @enderror">
                            @error('pacienteCpf')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-2">
                            <label for="pacienteEmail">E-mail:</label>
                        </div>
                        <div class="col-10">
                            <input id="pacienteEmail" type="email" class="form-control @error('pacienteEmail') is-invalid @enderror">
                            @error('pacienteEmail')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-4">
                            <label for="pacienteNascimento" >Data de Nascimento:</label>
                        </div>
                        <div class="col-6">
                            <input id="pacienteNascimento" type="date" class="form-control @error('pacienteNascimento') is-invalid @enderror">
                            @error('pacienteNascimento')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-2 d-flex">
                            <label for="pacienteTelefone" class="text-center">Telefone:</label>
                        </div>
                        <div class="col-3">
                            <input id="pacienteTelefone" type="text" class="form-control @error('pacienteTelefone') is-invalid @enderror">
                            @error('pacienteTelefone')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                        <div class="col-2 d-flex">
                            <label for="pacienteSexo">Sexo:</label>
                        </div>
                        <div class="col-3">
                            <select name="pacienteSexo" id="pacienteSexo" class="form-control">
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-4">
                            <label for="pacienteCidade">Cidade:</label>
                        </div>
                        <div class="col-6">
                            <input class="form-control @error('pacienteCidade') is-invalid @enderror" type="text" name="pacienteCidade" id="pacienteCidade">
                            @error('pacienteCidade')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-4">
                            <label for="pacienteBairro">Bairro:</label>
                        </div>
                        <div class="col-6">
                            <input class="form-control @error('pacienteBairro') is-invalid @enderror" type="text" name="pacienteBairro" id="pacienteBairro">
                            @error('pacienteBairro')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-5">
                            <label for="pacienteEnderecoRes">Endereço Residencial:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="pacienteEnderecoRes" id="pacienteEnderecoRes">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-5">
                            <label for="pacienteEnderecoComer">Endereço Comercial:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="pacienteEnderecoComer" id="pacienteEnderecoComer">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-5">
                            <label for="pacienteEstadoCivil">Estado Civil:</label>
                        </div>
                        <div class="col-6">
                            <input class="form-control @error('pacienteEstadoCivil') is-invalid @enderror" type="text" name="pacienteEstadoCivil" id="pacienteEstadoCivil">
                            @error('pacienteEstadoCivil')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-5">
                            <label for="pacienteNaturalidade">Naturalidade:</label>
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" name="pacienteNaturalidade" id="pacienteNaturalidade">
                            @error('pacienteNascimento')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-5">
                            <label for="pacienteProfissao">Profissão:</label>
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" name="pacienteProfissao" id="pacienteProfissao">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="_token"]').attr('content')
            }
        });
        
        function getPacienteInput()
        {
            var data = new Date();
            var data = data.getFullYear() + '-' + data.getMonth() + '-' + data.getDate();
            var paciente = {
                nome: $('#pacienteNome').val(),
                cpf: $('#pacienteCpf').val(),
                email: $('#pacienteEmail').val(),
                nascimento: $('#pacienteNascimento').val(),
                telefone: $('#pacienteNascimento').val(),
                sexo: $('#pacienteNascimento').val(),
                cidade: $('#pacienteCidade').val(),
                bairro: $('#pacienteBairro').val(),
                endereco_residencial: $('#pacienteEnderecoRes').val(),
                endereco_comercial: $('#pacienteEnderecoComer').val(),
                estado_civil: $('#pacienteEstadoCivil').val(),
                naturalidade: $('#pacienteNaturalidade').val(),
                profissao: $('#pacienteProfissao').val(),
                data_cadastro: data
            }

            return paciente
        }
        
        $('#formPaciente').submit((event) => {
            event.preventDefault();
            let paciente = getPacienteInput();
        });
    </script>
@endsection 