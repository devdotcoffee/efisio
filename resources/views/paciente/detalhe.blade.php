@extends('layout._layout')

@section('page', 'Detalhe Paciente')
    
@section('style')
    <style>
        .collapse-header {
            background-color: #5b5b5b;
        }
        .collapse-header > h2 > .btn {
            color: #fff;
        }
        #accordionPaciente {
            margin-bottom: 15px;
        }
    </style>
@endsection

@section('fisio')
<div class="container">
    <div class="accordion" id="accordionPaciente">
        <div class="card">
          <div class="card-header collapse-header" id="pacienteHeading">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsePaciente" aria-expanded="true" aria-controls="collapsePaciente">
                Dados do Paciente: {{ $paciente['nome'] }}
              </button>
            </h2>
          </div>
      
          <div id="collapsePaciente" class="collapse show" aria-labelledby="collapsePaciente" data-parent="#accordionPaciente">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h6>Nome:</h6>
                    <p>{{ $paciente['nome'] }}</p>
                    <h6>CPF:</h6>
                    <p>{{ $paciente['cpf'] }}</p>
                    <h6>Data de Nascimento:</h6>
                    <p>{{ $paciente['data_nascimento'] }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <h6>Telefone:</h6>
                    <p>{{ $paciente['telefone'] }}</p>
                    <h6>Sexo:</h6>
                    <p>{{ $paciente['sexo'] }}</p>
                    <h6>E-mail:</h6>
                    <p>{{ $paciente['email'] }}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <h6>Naturalidade:</h6>
                    <p>
                        @if($paciente['naturalidade'])
                            {{ $paciente['naturalidade'] }}
                        @else
                            Não informado
                        @endif
                    </p>
                    <h6>Profissão:</h6>
                    <p>
                        @if($paciente['profissao'])
                            {{ $paciente['profissao'] }}
                        @else
                            Não informado
                        @endif
                    </p>
                    <h6>Data do Cadastro:</h6>
                    <p>
                        @if($paciente['data_cadastro'])
                            {{ $paciente['data_cadastro'] }}
                        @else
                            Não informado
                        @endif
                    </p>
                </div>
                <div class="d-flex justify-content-between">
                    <h6>Cidade:</h6>
                    <p>
                        @if($paciente['cidade'])
                            {{ $paciente['cidade'] }}
                        @else
                            Não informado
                        @endif
                    </p>
                    <h6>Bairro:</h6>
                    <p>
                        @if($paciente['bairro'])
                            {{ $paciente['bairro'] }}
                        @else
                            Não informado
                        @endif
                    </p>
                </div>
                <div class="d-flex justify-content-between">
                    <h6>Endereço Comercial:</h6>
                    <p>
                        @if($paciente['endereco_comercial'])
                            {{ $paciente['endereco_comercial'] }}
                        @else
                            Não informado
                        @endif
                    </p>
                    <h6>Endereço Residêncial:</h6>
                    <p>
                        @if($paciente['endereco_residencial'])
                            {{ $paciente['endereco_residencial'] }}
                        @else
                            Não informado
                        @endif
                    </p>
                </div>
            </div>
          </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Prontuários do Paciente</h3>
            <hr>
            @if (count($prontuarios) > 0)
                <table>
                    <thead>
                        <th>
                            Data
                        </th>
                        <th>
                            Ações
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{ $prontuario['data'] }}
                            </td>
                            <td>
                                <a class="btn btn-info" href="">
                                    <i class="fas fa-align-justify"></i>
                                </a>
                                <a class="btn btn-danger" href="">
                                    <i class="fas fa-file-download"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            @else
                <div class="alert alert-danger" role="alert">
                    <p class="alert-text text-center">
                        Não existem registros de pacientes cadastrados.
                    </p>
                </div>
            @endif
        </div>
        <div class="card-footer">
            <a type="button" class="btn btn-dark">
                + Prontuários
            </a>
        </div>
    </div>
</div>
@endsection