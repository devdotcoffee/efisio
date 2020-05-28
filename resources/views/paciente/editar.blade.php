@extends('layout._layout')

@section('page', 'Paciente - Editar')

@section('fisio')
<div class="container">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-header">
            <h3>Editar dados - {{ $paciente['nome'] }}</h3>
        </div>
        <div class="card-body">
            <p class="important-field">Campos com (<i class="important">*</i>) são obrigatórios.</p>
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
                                <select name="pacienteSexo" id="pacienteSexo" class="form-control" value="{{ $paciente['sexo'] }}">
                                <option value="Masculino" {{ ($paciente['sexo'] == 'Masculino' ? "selected": "") }}>
                                    Masculino
                                </option>
                                <option value="Feminino" {{ ($paciente['sexo'] == 'Feminino' ? "selected": "") }}>
                                    Feminino
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-4">
                            <label for="pacienteCidade">Cidade:<sup class="important">*</sup></label>
                        </div>
                        <div class="col-6">
                            <input class="form-control @error('pacienteCidade') is-invalid @enderror" type="text" name="pacienteCidade" id="pacienteCidade" value="{{ $paciente['cidade'] }}">
                            @error('pacienteCidade')
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
                            <label for="pacienteBairro">Bairro:<sup class="important">*</sup></label>
                        </div>
                        <div class="col-6">
                            <input class="form-control @error('pacienteBairro') is-invalid @enderror" type="text" name="pacienteBairro" id="pacienteBairro" value="{{ $paciente['bairro'] }}">
                            @error('pacienteBairro')
                                <small class="form-text text-muted error-message">
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
                            <input type="text" class="form-control" name="pacienteEnderecoRes" id="pacienteEnderecoRes" value="{{ $paciente['endereco_residencial'] }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-5">
                            <label for="pacienteEnderecoComer">Endereço Comercial:</label>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" name="pacienteEnderecoComer" id="pacienteEnderecoComer" value="{{ $paciente['endereco_comercial'] }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-5">
                            <label for="pacienteEstadoCivil">Estado Civil:</label>
                        </div>
                        <div class="col-6">
                            <input class="form-control required" type="text" name="pacienteEstadoCivil" id="pacienteEstadoCivil" value="{{ $paciente['estado_civil'] }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-5">
                            <label for="pacienteNaturalidade">Naturalidade:</label>
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" name="pacienteNaturalidade" id="pacienteNaturalidade" value="{{ $paciente['naturalidade'] }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-5">
                            <label for="pacienteProfissao">Profissão:</label>
                        </div>
                        <div class="col-6">
                            <input class="form-control" type="text" name="pacienteProfissao" id="pacienteProfissao" value="{{ $paciente['profissao'] }}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Editar</button>
            </form>
        </div>
    </div>
  </div>    
@endsection

@section('js')
    <script src="{{ asset('js/maskPaciente.js') }}"></script>
@endsection