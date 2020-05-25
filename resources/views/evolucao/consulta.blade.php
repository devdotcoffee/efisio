@extends('layout._layout')

@section('page', 'Consultar Evolução')

@section('style')
    <style>
        .collapse-header {
            background-color: #5b5b5b;
        }
        .collapse-header > h2 > .btn {
            color: #fff;
        }
        .card-evolucoes {
            margin-top: 10px;
        }
    </style>
@endsection

@section('fisio')
<div class="container">
    <div class="accordion" id="accordionProntuario">
        <div class="card">
          <div class="card-header collapse-header" id="avaliacao">
            <h2 class="mb-0">
              <button class="btn" type="button" data-toggle="collapse" data-target="#avaliacaoDados" aria-expanded="true" aria-controls="avalicaoDados">
                Avaliação
              </button>
            </h2>
          </div>
      
          <div id="avaliacaoDados" class="collapse" aria-labelledby="avalicaoDados" data-parent="#accordionProntuario">
            <div class="card-body">
                <h4>Diagnóstico Clínico:</h4>
                <p>
                    @if ($prontuario['diagnostico_clinico'])
                        {{ $prontuario['diagnostico_clinico'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>História Clínica:</h4>
                <p>
                    @if ($prontuario['historia_clinica'])
                        {{ $prontuario['historia_clinica'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Queixa Principal do Paciente:</h4>
                <p>
                    @if ($prontuario['queixa_principal'])
                        {{ $prontuario['queixa_principal'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Hábitos de Vida:</h4>
                <p>
                    @if ($prontuario['habitos_vida'])
                        {{ $prontuario['habitos_vida'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>HMA:</h4>
                <p>
                    @if ($prontuario['hma'])
                        {{ $prontuario['hma'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>HMP:</h4>
                <p>
                    @if ($prontuario['hmp'])
                        {{ $prontuario['hmp'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Antecedentes Pessoais:</h4>
                <p>
                    @if ($prontuario['antecedente_pessoal'])
                        {{ $prontuario['antecedente_pessoal'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Antecedentes Familiares:</h4>
                <p>
                    @if ($prontuario['antecedente_familiar'])
                        {{ $prontuario['antecendente_familiar'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Tratamentos Realizados:</h4>
                <p>
                    @if ($prontuario['tratamento_realizado'])
                        {{ $prontuario['tratamento_realizado'] }}
                    @else
                        Não informado.
                    @endif
                </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapse-header" id="exame">
            <h2 class="mb-0">
              <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#exameDados" aria-expanded="false" aria-controls="exameDados">
                Exame Clínico/Físico
              </button>
            </h2>
          </div>
          <div id="exameDados" class="collapse" aria-labelledby="exameDados" data-parent="#accordionProntuario">
            <div class="card-body">
                <h4>Apresentação do paciente:</h4>
                <p>
                    @if ($prontuario['apresentacao_paciente'])
                        {{ $prontuario['apresentacao_paciente'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Exames Complementares:</h4>
                <p>
                    @if ($prontuario['exame_complementar'])
                        {{ $prontuario['exame_complementar'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Usa Medicamentos:</h4>
                <p>
                    @if ($prontuario['medicamento'])
                        {{ $prontuario['medicamento'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Realizou cirurgia:</h4>
                <p>
                    @if ($prontuario['cirurgia'])
                        {{ $prontuario['cirurgia'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Inspeção:</h4>
                <p>
                    @if ($prontuario['inspecao'])
                        {{ $prontuario['inspecao'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Semiologia:</h4>
                <p>
                    @if ($prontuario['semiologia'])
                        {{ $prontuario['semiologia'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Testes Especificos:</h4>
                <p>
                    @if ($prontuario['teste_especifico'])
                        {{ $prontuario['teste_especifico'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Intensidade da Dor:</h4>
                <p>
                    @if ($prontuario['intensidade_dor'])
                        {{ $prontuario['intensidade_dor'] }}
                    @else
                        Não informado.
                    @endif
                </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapse-header" id="planoTerapeutico">
            <h2 class="mb-0">
              <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#planoDados" aria-expanded="false" aria-controls="planoDados">
                Plano Terapêutico
              </button>
            </h2>
          </div>
          <div id="planoDados" class="collapse" aria-labelledby="planoTerapeutico" data-parent="#accordionProntuario">
            <div class="card-body">
                <h4>Objetivo de Tratamento:</h4>
                <p>
                    @if ($prontuario['objetivo_tratamento'])
                        {{ $prontuario['objetivo_tratamento'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Recursos Terapêuticos:</h4>
                <p>
                    @if ($prontuario['recurso_terapeutico'])
                        {{ $prontuario['recurso_terapeutico'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Plano Terapêutico:</h4>
                <p>
                    @if ($prontuario['plano_terapeutico'])
                        {{ $prontuario['plano_terapeutico'] }}
                    @else
                        Não informado.
                    @endif
                </p>
                <h4>Diagnóstico Fisioterapeutico:</h4>
                <p>
                    @if ($prontuario['diagnostico_fisioterapeutico'])
                        {{ $prontuario['diagnostico_fisioterapeutico'] }}
                    @else
                        Não informado.
                    @endif
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="container">
    <div class="card shadow p-3 mb-5 bg-white rounded card-evolucoes">
        <div class="card-header">
            <h3>Lista de Evoluções - Prontuário: {{ $prontuario['idProntuario'] }}</h3>
        </div>
        <div class="card-body">
            @if (count($evolucoes) > 0)
                <div class="mb-2">
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
                </div>
                <table class="table table-hover table-sm table-bordered" id="tableFisio">
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
                        @foreach ($evolucoes as $evolucao)
                            <tr>
                                <td>
                                    {{ $evolucao['idEvolucao'] }}
                                </td>
                                <td>
                                    {{ $evolucao['data'] }}
                                </td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="{{ route('editar-evolucao', $evolucao['idEvolucao']) }}" type="button">
                                        <i class="fas fa-edit"></i>
                                        Editar
                                    </a>
                                    <a class="btn btn-danger btn-sm btnDelete" type="button" data-id="{{ $evolucao['idEvolucao'] }}" 
                                        data-toggle="modal" data-target="#modalEvolucaoDelete">
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
                        Não existem registros de evoluções cadastrados para esse prontuário
                    </p>
                </div>
            @endif
        </div>
        <div class="card-footer">
            <a type="button" class="btn btn-dark" href="{{ route('cadastro-evolucao', $prontuario['idProntuario']) }}">
                + Evolução
            </a>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEvolucaoDelete" tabindex="-1" 
    role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
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
                    Tem certeza que deseja excluir esta evolução?
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal" aria-label="Fechar" id="closeModalDelete">
                    Cancelar
                </button>
                <button class="btn btn-danger" type="button" aria-label="Deletar" id="btnDeleteConfirm" data-id="">
                    Deletar
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script type="module" src="{{ asset('js/consultaEvolucao.js') }}"></script>
@endsection