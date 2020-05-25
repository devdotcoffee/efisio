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
      
          <div id="collapsePaciente" class="collapse" aria-labelledby="collapsePaciente" data-parent="#accordionPaciente">
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
            <form>
                <div class="input-group mb-2 w-100">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" id="inputPesquisa" placeholder="Pesquise...">
                </div>
            </form>
            @if (count($prontuarios) > 0)
                <table class="table table-sm table-hover table-bordered">
                    <thead>
                        <th>
                            #
                        </th>
                        <th>
                            Data
                        </th>
                        <th>
                            Ações
                        </th>
                    </thead>
                    <tbody>
                        @foreach ($prontuarios as $prontuario)
                        <tr>
                            <td>
                                {{ $prontuario['idProntuario'] }}
                            </td>
                            <td>
                                {{ $prontuario['data'] }}
                            </td>
                            <td>
                                <a class="btn btn-warning btn-sm" type="button" href="{{ route('editar-prontuario', $prontuario['idProntuario']) }}">
                                    <i class="fas fa-edit"></i>
                                    Editar
                                </a>
                                <a class="btn btn-success btn-sm" href="{{ route('lista-evolucoes', $prontuario['idProntuario']) }}">
                                    <i class="fas fa-book-open"></i>
                                    Detalhe/Evoluções
                                </a>
                                <a class="btn btn-danger btn-sm" href="">
                                    <i class="fas fa-file-download"></i>
                                    PDF
                                </a>
                                <a class="btn btn-danger btn-sm btnDelete" type="button" data-id="{{ $prontuario['idProntuario'] }}" 
                                    data-toggle="modal" data-target="#modalProntuarioDeletar">
                                    <i class="fas fa-trash-alt"></i>
                                    Deletar
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-danger" role="alert">
                    <p class="alert-text text-center">
                        Não existem registros de prontuários cadastrados.
                    </p>
                </div>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('cadastro-prontuario', $paciente['idPaciente']) }}" type="button" class="btn btn-dark">
                + Prontuários
            </a>
        </div>
    </div>
</div>

<div class="modal fade" id="modalProntuarioDeletar" 
    tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmar deleção:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p class="modal-text">
                    Tem certeza que deseja excluir este prontuário?
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" aria-label="Fechar" id="closeModalDelete">
                    Cancelar
                </button>
                <button class="btn btn-danger" type="button" aria-label="Deletar" id="btnConfirmarDeletar" data-id="">
                    Deletar
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script type="module" src="{{ asset('js/prontuarioDelete.js') }}"></script>
@endsection