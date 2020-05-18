@extends('layout._layout')

@section('page', 'Editar Paciente')
    
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
        .important {
            font-size: 11pt;
            color: #ff0000;
        }
    </style>    
@endsection

@section('fisio')
<div class="container">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-header">
            <h3>Editar dados - {{ $paciente['idPaciente'] }}</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('editar-cadastro-paciente', $paciente['idPaciente']) }}" id="formPaciente">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-2">
                            <label for="pacienteNome">
                                Nome Completo: <sup class="important">*</sup>
                            </label>
                        </div>
                        <div class="col-10">
                            <input id="pacienteNome" type="text" class="form-control required @error('pacienteNome') is-invalid @enderror" 
                                name="pacienteNome" value="{{ $paciente['nome'] }}">
                            @error('pacienteNome')
                                <small class="form-text text-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
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
                            <input id="pacienteCpf" type="text" class="form-control required @error('pacienteCpf') is-invalid @enderror" 
                                name="pacienteCpf" value="{{ $paciente['cpf'] }}">
                            @error('pacienteCpf')
                                <small class="form-text text-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
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
                            <input id="pacienteEmail" type="email" class="form-control required @error('pacienteEmail') is-invalid @enderror" 
                                name="pacienteEmail" value="{{ $paciente['email'] }}">
                            @error('pacienteEmail')
                                <small class="form-text text-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
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
                            <input id="pacienteNascimento" type="date" class="form-control required @error('pacienteNascimento') is-invalid @enderror" 
                                name="pacienteNascimento" value="{{ $paciente['data_nascimento'] }}">
                            @error('pacienteNascimento')
                                <small class="form-text text-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
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
                            <input id="pacienteTelefone" type="text" class="form-control required @error('pacienteTelefone') is-invalid @enderror" 
                                name="pacienteTelefone" value="{{ $paciente['telefone'] }}">
                            @error('pacienteTelefone')
                                <small class="form-text text-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
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
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </form>
        </div>
    </div>
  </div>    
@endsection