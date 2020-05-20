
@extends('layout._layout')

@section('page', 'Cadastro - Prontuário')

@section('style')
    <style>
        #rangeInput {
            border: 1px solid #5b5b5b;
            text-align: center;
            border-radius: 5px;
            font-size: 22pt;
            color: #5b5b5b;
        }
    </style>    
@endsection

@section('fisio')  
<div class="container">
    <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-header">
            <h1>Prontuário</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('post-cadastro-prontuario', $paciente['idPaciente']) }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-2">
                            <label for="prontuarioData">Data da avaliação:</label>
                        </div>
                        <div class="col-3">
                            <input class="form-control @error('prontuarioData') is-invalid @enderror" type="date" name="prontuarioData" id="prontuarioData">
                            @error('prontuarioData')
                                <small class="form-text tex-muted error-message">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h2 class="my-4">Avaliação:</h2>
                    <hr>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioDiagClinico">Diagnóstico Cliníco:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioDiagClinico" id="prontuarioDiagClinico" rows="2">{{ old('prontuarioDiagClinico') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioHistoriaClinica">História Clínica:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioHistoriaClinica" id="prontuarioHistoriaClinica" rows="1">{{ old('prontuarioHistoriaClinica') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioQueixa">Queixa Principal do Paciente:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioQueixa" id="prontuarioQueixa" rows="1">{{ old('prontuarioQueixa') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioHabito">Hábitos de Vida:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioHabito" id="prontuarioHabito" rows="1">{{ old('prontuarioHabito') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioHma">HMA:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioHma" id="prontuarioHma" rows="1">{{ old('prontuarioHma') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioHmp">HMP:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioHmp" id="prontuarioHmp" rows="1">{{ old('prontuarioHmp') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioAntPes">Antecedentes Pessoais:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioAntPes" id="prontuarioAntPes" rows="1">{{ old('prontuarioAntPes') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioAntFam">Antecedentes Familiares:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioAntFam" id="prontuarioAntFam" rows="1">{{ old('prontuarioAntFam') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioTrat">Tratamentos Realizados:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioTrat" id="prontuarioTrat" rows="1">{{ old('prontuarioTrat') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h2>Exame Clínico/Físico</h2>
                    <hr>
                    <div class="form-group">
                        <div class="form-row">
                            <label for="prontuarioAprePaci" class="col-form-label col-2">Apresentação do paciente: </label>
                            <select class="form-control col-10" name="prontuarioAprePaci" id="prontuarioAprePaci">
                                <option value="Deambulando">Deambulando</option>
                                <option value="Deambulando com apoio">Deambulando com apoio</option>
                                <option value="Cadeira de rodas">Cadeira de rodas</option>
                                <option value="Internado">Internado</option>
                                <option value="Orientado">Orientado</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <legend class="col-form-label col-2">Exames Complementares:</legend>
                            <div class="col-10">
                               <textarea class="form-control" name="prontuarioExameComplementar" id="exameComplementar" rows="3">{{ old('prontuarioExameComplementar') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <legend class="col-form-label col-2">Usa Medicamentos:</legend>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioMedicamento" id="medicamentos" rows="3">{{ old('prontuarioMedicamento') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <legend class="col-form-label col-2">Realizou cirurgia:</legend>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioCirurgia" id="cirurgias" rows="3">{{ old('prontuarioCirurgia') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <label for="prontuarioInspecao" class="col-form-label col-2">Inspeção:</label>
                            <select class="form-control col-10" name="prontuarioInspecao">
                                <option value="Normal">Normal</option>
                                <option value="Edema">Edema</option>
                                <option value="Cicatrização Incompleta">Cicatrização Incompleta</option>
                                <option value="Eritemas">Eritemas</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioSemiologia">Semiologia:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioSemiologia" id="prontuarioSemiologia" rows="1">{{ old('prontuarioSemiologia') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioTestes">Testes Especificos:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioTestes" id="prontuarioTestes" rows="1">{{ old('prontuarioTestes') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioDor">Intensidade da Dor:</label>
                            </div>
                            <div class="col-9">
                                <input class="form-control-range" type="range" name="prontuarioDor" id="prontuarioDor" min="1" max="10" step="1" value="{{ old('prontuarioDor') }}">
                            </div>
                            <div id="rangeInput" class="col-1"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <h2>Plano Terapêutico</h2>
                    <hr>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioObjTrat">Objetivo de Tratamento:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioObjTrat" id="prontuarioObjTrat" rows="2">{{ old('prontuarioObjTrat') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioRecurTera">Recursos Terapêuticos:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioRecurTera" id="prontuarioRecurTera" rows="2">{{ old('prontuarioRecurTera') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioPlanoTer">Plano Terapêutico:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioPlanoTer" id="prontuarioPlanoTer" rows="2">{{ old('prontuarioPlanoTer') }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-2">
                                <label for="prontuarioDiagFisio">Diagnóstico Fisioterapeutico:</label>
                            </div>
                            <div class="col-10">
                                <textarea class="form-control" name="prontuarioDiagFisio" id="prontuarioDiagFisio" rows="2">{{ old('prontuarioDiagFisio') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">
                    Cadastrar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    /**
    $('#prontuarioExameCompleSim').on('click', () => {
        if($('#prontuarioExameCompleSim').prop('checked'))
        {
            $('#exameComplementar').removeAttr('disabled');
        }
    });
    $('#prontuarioExameCompleNao').on('click', () => {
        if($('#prontuarioExameCompleNao').prop('checked'))
        {
            $('#exameComplementar').prop('disabled', true);
        }
    });
    $('#prontuarioMedicamentosSim').on('click', () => {
        if($('#prontuarioMedicamentosSim').prop('checked'))
        {
            $('#medicamentos').removeAttr('disabled');
        }
    });
    $('#prontuarioMedicamentosNao').on('click', () => {
        if($('#prontuarioMedicamentosNao').prop('checked'))
        {
            $('#medicamentos').prop('disabled', true);
        }
    });
    $('#prontuarioCirurgiaSim').on('click', () => {
        if($('#prontuarioCirurgiaSim').prop('checked'))
        {
            $('#cirurgias').removeAttr('disabled');
        }
    });
    $('#prontuarioCirurgiaNao').on('click', () => {
        if($('#prontuarioCirurgiaNao').prop('checked'))
        {
            $('#cirurgias').prop('disabled', true);
        }
    });
    **/
    $('#prontuarioDor').change(function() {
        var rangeValue = $(this).val();
        $('#rangeInput').html(rangeValue);
    });
</script>
@endsection