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
        .btn-dark {
            border: 2px solid #5B5B5B !important;
            color: #5B5B5B;
            background-color: transparent;
            font-weight: 500;
        }
        .btn-dark:hover {
            background-color: #5B5B5B;
            color: #fff !important;
            border: 2px solid #fff !important;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .btn-dark:active {
            background-color: #5B5B5B !important;
            color: #fff !important;
            border: 2px solid #fff !important;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        th, td {
            text-align: center;
        }

    </style>
@endsection
@section('fisio')
<div class="container">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-header">
            <h3>Lista de Paciente</h1>
        </div>
        <div class="card-body">
            @if (count($pacientes) > 0)
            <div class="mb-2">
                <input type="text" name="" id="">
                <a type="button" class="btn btn-dark" data-toggle="modal" data-target="#cadastroPaciente">
                    + Paciente
                </a>
            </div>
            <table class="table table-hover table-sm" id="tabelaPaciente">
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
                                <button class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </button>
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
                <a type="button" class="btn btn-dark" data-toggle="modal" data-target="#cadastroPaciente">
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
                                Nome Completo: <sub class="important">*</sub>
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
                                CPF: <sub class="important">*</sub>
                            </label>
                        </div>
                        <div class="col-10">
                            <input id="pacienteCpf" type="text" class="form-control required" name="pacienteCpf">
                        </div>
                    </div>
                </div>
                    <div class="form-row">
                        <div class="col-2">
                            <label for="pacienteEmail">
                                E-mail: <sub class="important">*</sub>
                            </label>
                        </div>
                        <div class="col-10">
                            <input id="pacienteEmail" type="email" class="form-control required" name="pacienteEmail">
                        </div>
                    </div>
                </div>
                    <div class="form-row">
                        <div class="col-4">
                            <label for="pacienteNascimento">
                                Data de Nascimento: <sub class="important">*</sub>
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
                                Telefone: <sub class="important">*</sub>
                            </label>
                        </div>
                        <div class="col-3">
                            <input id="pacienteTelefone" type="text" class="form-control required" name="pacienteTelefone">
                        </div>
                        <div class="col-2 d-flex">
                            <label for="pacienteSexo">
                            </label>
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
                    <button type="submit" class="btn btn-dark">Cadastrar</button>
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
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        
        function getPacienteInput()
        {
            var data = new Date();
            var data_cadastro = 
                data.getFullYear().toString() + '-' + 
                data.getMonth().toString() + '-' + 
                data.getDate().toString();

            var paciente = {
                nome: $('#pacienteNome').val(),
                cpf: $('#pacienteCpf').val(),
                email: $('#pacienteEmail').val(),
                nascimento: $('#pacienteNascimento').val(),
                telefone: $('#pacienteTelefone').val(),
                sexo: $('#pacienteSexo').val(),
                cidade: $('#pacienteCidade').val(),
                bairro: $('#pacienteBairro').val(),
                endereco_residencial: $('#pacienteEnderecoRes').val(),
                endereco_comercial: $('#pacienteEnderecoComer').val(),
                estado_civil: $('#pacienteEstadoCivil').val(),
                naturalidade: $('#pacienteNaturalidade').val(),
                profissao: $('#pacienteProfissao').val(),
                data_cadastro: data_cadastro
            }
            
            return paciente
        }
        function salvaPaciente(paciente)
        {
            $.ajax({
                url: '/api/pacientes',
                type: 'POST',
                data: paciente,
                dataType: 'json',
                success: function (data) {
                    if (data.success)
                    {
                        window.location.replace('/fisio/detalhe/' + data.success);  
                    }
                    if (data.errors) 
                    {
                        $('#alertError').removeClass('d-none').addClass('d-block');
                    } 
                },
                error: function (data) {
                    console.log('error');
                }
            });
        }
        function deletarLinha(idPaciente)
        {
            var rows = $('#tabelaPaciente>tbody>tr');
            var row = rows.filter(function(i, element) {
                return element.cells[0].textContent == idPaciente
            });
            if (row) {
                row.remove();
            } 
        }
        function deletarPaciente(idPaciente)
        {
            $.ajax({
                url: '/api/paciente/' + idPaciente,
                type: 'DELETE',
                context: this,
                success: function(data) {
                    deletarLinha(idPaciente);
                }, 
                error: function(data) {
                    console.log(data);
                }
            });
        }
        $('.btnDeletar').on('click', function() {
            let idPaciente = $(this).data('id');
            $('#btnConfirmarDeletar').attr('data-id', idPaciente);
        });
        $('#btnConfirmarDeletar').on('click', function() {
            let idPaciente = $(this).data('id');
            deletarPaciente(idPaciente);
            $('#closeModalDelete').click(); 
        });
        /*
        function fazLinhaTabela(paciente)
        {
            var linhaTabela = '<tr>' +
                                    '<td>' + paciente.id + '</td>' + 
                                    '<td>' + paciente.nome + '</td>' +
                                    '<td>' + paciente.cpf + '</td>'+
                                    '<td>' +
                                        '<button class="btn">' +
                                            '<i class="fas fa-edit"></i>' +
                                        '</button>' +
                                    '</td>' +
                                '</tr>'
            
            return linhaTabela;
        }
        */
        $('#formPaciente').submit((event) => {
            event.preventDefault();
            $('#alertError').removeClass('d-block').addClass('d-none');
            salvaPaciente(getPacienteInput());
        });
    </script>
@endsection 