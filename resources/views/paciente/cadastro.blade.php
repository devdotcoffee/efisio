@extends('layout._layout')

@section('page', 'Inicio')

@section('style')
    <style>
        body {
            background: url("{{ asset('img/bkg-e-fisio.svg') }}") no-repeat center fixed;
            background-size: cover;
        }
        .card-header {
            background-color: transparent;
        }
        .btnForm {
            background: #5B5B5B;
            border-radius: 4px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            color: #fff;
        }
        .btnBack {
            color: #fff;
        }
        .logoImg {
            width: 15%;
        }
        .btnBack {
            font-size: 11pt;
        }
        .divBack {
            height: 100%;
        }
    </style>    
@endsection

@section('content')
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-white rounded w-100 mx-auto">
            <div class="card-header">
                <h1>Cadastro de Paciente</h1>
            </div>
            <hr>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="pacienteNome">Nome Completo:</label>
                            </div>
                            <div class="col-10">
                                <input id="pacienteNome" type="text" class="form-control">
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="pacienteNascimento" >Data de Nascimento:</label>
                            </div>
                            <div class="col-2">
                                <input id="pacienteNascimento" type="text" class="form-control">
                            </div>
                            <div class="col-1 justify-content-center d-flex">
                                <label for="pacienteTelefone" class="text-center">Telefone:</label>
                            </div>
                            <div class="col-3">
                                <input id="pacienteTelefone" type="text" class="form-control">
                            </div>
                            <div class="col-2 d-flex justify-content-center">
                                <label for="pacienteSexo">Sexo:</label>
                            </div>
                            <div class="col-2">
                                <select name="pacienteSexo" id="pacienteSexo" class="form-control">
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-1">
                                <label for="pacienteCidade">Cidade:</label>
                            </div>
                            <div class="col-3">
                                <input class="form-control" type="text" name="pacienteCidade" id="pacienteCidade">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <label for="pacienteBairro">Bairro:</label>
                            </div>
                            <div class="col-3">
                                <input class="form-control" type="text" name="pacienteBairro" id="pacienteBairro">
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                <label for="pacienteProf">Profissão:</label>
                            </div>
                            <div class="col-3">
                                <input class="form-control" type="text" name="pacienteProf" id="pacienteProf">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="pacienteEnderecoRes">Endereço Residencial:</label>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="pacienteEnderecoRes" id="pacienteEnderecoRes">
                            </div>
                            <div class="col-2 d-flex justify-content-center">
                                <label for="pacienteEstadoCivil">Estado Civil:</label>
                            </div>
                            <div class="col-3">
                                <input class="form-control" type="text" name="pacienteEstadoCivil" id="pacienteEstadoCivil">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="pacienteEnderecoComer">Endereço Comercial:</label>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" name="pacienteEnderecoComer" id="pacienteEnderecoComer">
                            </div>
                            <div class="col-2 d-flex justify-content-center">
                                <label for="pacienteNaturalidade">Naturalidade:</label>
                            </div>
                            <div class="col-3">
                                <input class="form-control" type="text" name="pacienteNaturalidade" id="pacienteNaturalidade">
                            </div>
                        </div>
                    </div>
                    <button class="btn btnForm w-25">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection