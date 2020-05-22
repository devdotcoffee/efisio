@extends('layout._layout')

@section('page', 'Lista - Fisio')

@section('fisio')
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <div class="card-header">
                <h3>Lista de Fisios</h3>
            </div>
            <div class="card-body">
                @if (count($fisios) > 0)
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
                                Fisio
                            </th>
                            <th>
                                CREFITO
                            </th>
                            <th>
                                CPF
                            </th>
                            <th>
                                Ações
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($fisios as $fisio)
                                <tr>
                                    <td>
                                        {{ $fisio['idFisioterapeuta'] }}
                                    </td>
                                    <td>
                                        {{ $fisio['nome'] }}
                                    </td>
                                    <td>
                                        {{ $fisio['crefito'] }}
                                    </td>
                                    <td>
                                        {{ $fisio['cpf'] }}
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('editar-fisio', $fisio['idFisioterapeuta']) }}" type="button">
                                            <i class="fas fa-edit"></i>
                                            Editar
                                        </a>
                                        <a class="btn btn-danger btnDelete" type="button" data-id="{{ $fisio['idFisioterapeuta'] }}" 
                                            data-toggle="modal" data-target="#modalFisioDelete">
                                            <i class="fas fa-trash-alt"></i>
                                            Excluir
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
                {{ $fisios->links() }}
                @else
                    <div class="alert alert-danger" role="alert">
                        <p class="alert-text text-center">
                            Não existem registros de fisioterapeutas cadastrados.
                        </p>
                    </div>
                @endif
            </div>
            <div class="card-footer">
                <a type="button" class="btn btn-dark" href="{{ route('cadastro-fisio') }}">
                    + Fisio
                </a>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalFisioDelete" tabindex="-1" 
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
                    <button class="btn btn-danger" type="button" aria-label="Deletar" id="btnDeleteConfirm" data-id="">
                        Deletar
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/consultaFisio.js') }}"></script>
@endsection