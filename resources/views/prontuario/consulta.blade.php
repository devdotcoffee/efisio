@extends('layout._layout')

@section('fisio')
<div class="container">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-header">
            <h3>Lista de Prontuários</h3>
            {{ $prontuarios }}
        </div>
        <div class="card-body">
            @if (count($prontuarios) > 0)
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
                            Paciente
                        </th>
                        <th>
                            Fisio
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
                                    {{ $prontuario['paciente'] }}
                                </td>
                                <td>
                                    {{ $prontuario['fisio'] }}
                                </td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="{{ route('editar-prontuario', $prontuario['idProntuario']) }}" type="button">
                                        <i class="fas fa-edit"></i>
                                        Editar
                                    </a>
                                    <a class="btn btn-success btn-sm" href="{{ route('lista-evolucoes', $prontuario['idProntuario']) }}">
                                        <i class="fas fa-book-open"></i>
                                        Detalhe/Evoluções
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{ route('pdf-prontuario', $prontuario['idProntuario']) }}">
                                        <i class="fas fa-file-download"></i>
                                        PDF
                                    </a>
                                    <a class="btn btn-danger btn-sm btnDelete" type="button" data-id="{{ $prontuario['idProntuario'] }}" 
                                        data-toggle="modal" data-target="#modalDelete">
                                        <i class="fas fa-trash-alt"></i>
                                        Excluir
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
    </div>
</div>
<div class="modal fade" id="modalDelete" tabindex="-1" 
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
                    Tem certeza que deseja excluir este cadastro?
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