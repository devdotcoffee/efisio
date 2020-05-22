@extends('layout._layout')

@section('page', 'Consultar Paciente')

@section('fisio')
<div class="container">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-header">
            <h3>Lista de Paciente</h1>
        </div>
        <div class="card-body">
            @if (count($pacientes) > 0)
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
            <table class="table table-hover table-sm table-bordered" id="tabelaPaciente">
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
                                {{ $paciente['idPaciente'] }}
                            </td>
                            <td>
                                {{ $paciente['nome'] }}
                            </td>
                            <td>
                                {{ $paciente['cpf'] }}
                            </td>
                            <td>
                                <a class="btn btn-warning btn-sm" type="button" href="{{ route('editar-paciente', $paciente['idPaciente']) }}">
                                    <i class="fas fa-edit"></i>
                                    Editar
                                </a>
                                <a class="btn btn-success btn-sm" type="button" href="{{ route('detalhe-paciente', $paciente['idPaciente']) }}">
                                    <i class="far fa-id-badge"></i>
                                    Detalhe/Prontuários
                                </a>
                                <a class="btn btn-danger btn-sm btnDelete" type="button" data-id="{{ $paciente['idPaciente'] }}" 
                                    data-toggle="modal" data-target="#modalPacienteDeletar">
                                    <i class="fas fa-trash-alt"></i>
                                    Excluir
                                </a>
                            </td>
                    @endforeach
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
            <a type="button" class="btn btn-dark" data-toggle="modal" data-target="#cadastroPaciente">
                + Paciente
            </a>
        </div>
    </div>
</div>

<div class="modal fade" id="cadastroPaciente" tabindex="-1" role="dialog" aria-labelledby="Cadastro de paciente" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Cadastrar paciente
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger d-none" role="alert" id="alertError">
                    <p class="alert-text text-center">
                        Preencha todos os campos obrigatórios.
                    </p>
                </div>
                <form id="formPaciente">
                    @csrf
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="pacienteNome">
                                    Nome Completo: <sup class="important">*</sup>
                                </label>
                            </div>
                            <div class="col-10">
                                <input id="pacienteNome" type="text" class="form-control required" name="pacienteNome">
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="pacienteCpf">
                                    CPF: <sup class="important">*</sup>
                                </label>
                            </div>
                            <div class="col-10">
                                <input id="pacienteCpf" type="text" class="form-control required" name="pacienteCpf">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="pacienteEmail">
                                    E-mail: <sup class="important">*</sup>
                                </label>
                            </div>
                            <div class="col-10">
                                <input id="pacienteEmail" type="email" class="form-control required" name="pacienteEmail">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-4">
                                <label for="pacienteNascimento">
                                    Data de Nascimento: <sup class="important">*</sup>
                                </label>
                            </div>
                            <div class="col-6">
                                <input id="pacienteNascimento" type="date" class="form-control required" name="pacienteNascimento">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2 d-flex">
                                <label for="pacienteTelefone" class="text-center">
                                    Telefone: <sup class="important">*</sup>
                                </label>
                            </div>
                            <div class="col-3">
                                <input id="pacienteTelefone" type="text" class="form-control required" name="pacienteTelefone">
                            </div>
                            <div class="col-2 d-flex">
                                <label for="pacienteSexo">Sexo</label>
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
                                <input class="form-control required" type="text" name="pacienteCidade" id="pacienteCidade">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-4">
                                <label for="pacienteBairro">Bairro:</label>
                            </div>
                            <div class="col-6">
                                <input class="form-control required" type="text" name="pacienteBairro" id="pacienteBairro">
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
                                <input class="form-control required" type="text" name="pacienteEstadoCivil" id="pacienteEstadoCivil">
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
                        <button type="supmit" class="btn btn-dark">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalPacienteDeletar" 
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
                    Tem certeza que deseja excluir este paciente?
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
    <script src="{{ asset('js/consultaPaciente.js') }}"></script>
@endsection 