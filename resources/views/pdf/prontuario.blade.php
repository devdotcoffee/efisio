<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $prontuario['data'] }}</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        .in-line {
            display: inline;
        }
        .my-5 {
            margin: 5px 0px 5px 0px;
        }
        .my-5 > h4, p {
            display: inline;
        }
        .assign {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>
        Prontuário - N° {{ $prontuario['idProntuario'] }}
    </h1>
    <h5>
        Data - {{ date("d/m/Y", strtotime($prontuario['data'])) }}
    </h5>
    <h5>
        Fisioterapeuta: {{ $prontuario['fisio'] }} - CREFITO: {{ $prontuario['crefito'] }}
    </h5>
    <hr>
    <h4>
        Paciente: {{ $prontuario['paciente'] }} - Cadastro: {{ date("d/m/Y", strtotime($prontuario['data_cadastro'])) }}
    </h4>
    <h5>
        CPF: {{ $prontuario['cpf'] }} | Telefone: {{ $prontuario['telefone'] }} | E-mail: {{ $prontuario['email'] }}
    </h5>
    <hr>
    <h2>
        Avaliação:
    </h2>
    <div class="my-5">
        <h4>Diagnóstico Clínico:</h4>
        <p>
            @if ($prontuario['diagnostico_clinico'])
                {{ $prontuario['diagnostico_clinico'] }}
            @else
                Não informado.
            @endif
        </p>
    </div>
    <div class="my-5">
        <h4>História Clínica:</h4>
        <p>
            @if ($prontuario['historia_clinica'])
                {{ $prontuario['historia_clinica'] }}
            @else
                Não informado.
            @endif
        </p>
    </div>
    <div class="my-5">
        <h4>Queixa Principal do Paciente:</h4>
        <p>
            @if ($prontuario['queixa_principal'])
                {{ $prontuario['queixa_principal'] }}
            @else
                Não informado.
            @endif
        </p>
    </div>
    <div class="my-5">
        <h4 class="in-line">Hábitos de Vida:</h4>
        <p class="in-line">
            @if ($prontuario['habitos_vida'])
                {{ $prontuario['habitos_vida'] }}
            @else
                Não informado.
            @endif
        </p>
    </div>
    <div class="my-5">
        <h4 class="in-line">HMA:</h4>
            <p class="in-line">
                @if ($prontuario['hma'])
                    {{ $prontuario['hma'] }}
                @else
                    Não informado.
                @endif
            </p>
    </div>
    <div class="my-5">
        <h4 class="in-line">HMP:</h4>
            <p class="in-line">
                @if ($prontuario['hmp'])
                    {{ $prontuario['hmp'] }}
                @else
                    Não informado.
                @endif
            </p>
    </div>
    <div class="my-5">
        <h4 class="in-line">Antecedentes Pessoais:</h4>
            <p class="in-line">
                @if ($prontuario['antecedente_pessoal'])
                    {{ $prontuario['antecedente_pessoal'] }}
                @else
                    Não informado.
                @endif
            </p>
    </div>
    <div class="my-5">
        <h4 class="in-line">Antecedentes Familiares:</h4>
                <p class="in-line">
                    @if ($prontuario['antecedente_familiar'])
                        {{ $prontuario['antecendente_familiar'] }}
                    @else
                        Não informado.
                    @endif
                </p>
    </div>
    <div class="my-5">
        <h4 class="in-line">Tratamentos Realizados:</h4>
                <p class="in-line">
                    @if ($prontuario['tratamento_realizado'])
                        {{ $prontuario['tratamento_realizado'] }}
                    @else
                        Não informado.
                    @endif
                </p>
    </div>
    <hr>
    <h2>Exame Clínico/Físico:</h2>
    <div class="my-5">
        <h4>Apresentação do paciente:</h4>
        <p>
            @if ($prontuario['apresentacao_paciente'])
                {{ $prontuario['apresentacao_paciente'] }}
            @else
                Não informado.
            @endif
        </p>
    </div>
    <div class="my-5">
        <h4>Exames Complementares:</h4>
        <p>
            @if ($prontuario['exame_complementar'])
                {{ $prontuario['exame_complementar'] }}
            @else
                Não informado.
            @endif
        </p>
    </div>
    <div class="my-5">
        <h4>Usa Medicamentos:</h4>
        <p>
            @if ($prontuario['medicamento'])
                {{ $prontuario['medicamento'] }}
            @else
                Não informado.
            @endif
        </p>
    </div>
    <div class="my-5">
        <h4>Realizou cirurgia:</h4>
        <p>
            @if ($prontuario['cirurgia'])
                {{ $prontuario['cirurgia'] }}
            @else
                Não informado.
            @endif
        </p>
    </div>
    <div class="my-5">
        <h4>Inspeção:</h4>
        <p>
            @if ($prontuario['inspecao'])
                {{ $prontuario['inspecao'] }}
            @else
                Não informado.
            @endif
        </p>
    </div>
    <div class="my-5">
        <h4>Semiologia:</h4>
                <p>
                    @if ($prontuario['semiologia'])
                        {{ $prontuario['semiologia'] }}
                    @else
                        Não informado.
                    @endif
                </p>
    </div>
    <div class="my-5">
        <h4>Testes Especificos:</h4>
                <p>
                    @if ($prontuario['teste_especifico'])
                        {{ $prontuario['teste_especifico'] }}
                    @else
                        Não informado.
                    @endif
                </p>
    </div>
    <div class="my-5">
        <h4>Intensidade da Dor:</h4>
                <p>
                    @if ($prontuario['intensidade_dor'])
                        {{ $prontuario['intensidade_dor'] }}
                    @else
                        Não informado.
                    @endif
                </p>
    </div>
    <hr>
    <h2>Plano Terapêutico:</h2>
    <div class="my-5">
        <h4>Objetivo de Tratamento:</h4>
                <p>
                    @if ($prontuario['objetivo_tratamento'])
                        {{ $prontuario['objetivo_tratamento'] }}
                    @else
                        Não informado.
                    @endif
                </p>
    </div>
    <div class="my-5">
        <h4>Recursos Terapêuticos:</h4>
                <p>
                    @if ($prontuario['recurso_terapeutico'])
                        {{ $prontuario['recurso_terapeutico'] }}
                    @else
                        Não informado.
                    @endif
                </p>
    </div>
    <div class="my-5">
        <h4>Plano Terapêutico:</h4>
                <p>
                    @if ($prontuario['plano_terapeutico'])
                        {{ $prontuario['plano_terapeutico'] }}
                    @else
                        Não informado.
                    @endif
                </p>
    </div>
    <div class="my-5">
        <h4>Diagnóstico Fisioterapeutico:</h4>
                <p>
                    @if ($prontuario['diagnostico_fisioterapeutico'])
                        {{ $prontuario['diagnostico_fisioterapeutico'] }}
                    @else
                        Não informado.
                    @endif
                </p>
    </div>
    <hr>
    <h1>Evoluções:</h1>
    @if (!empty($evolucoes))
        @foreach ($evolucoes as $evolucao)
            <h3>Evolução N° - {{ $evolucao['idEvolucao'] }} - Data: {{ date("d/m/Y", strtotime($evolucao['data'])) }}</h3>
            <div class="my-5">
                <h4>Descrição:</h4>
                <p>
                    {{ $evolucao['descricao'] }}
                </p>
            </div>
        @endforeach
    @else
        <p>Não há evoluções</p>
    @endif
    <hr>
    <div class="assign">
        <h3>Assinatura: {{ $prontuario['fisio'] }}</h2>
        <p>
            _______________________________________________________________________
        </p>
        <h4>
            CREFITO: {{ $prontuario['crefito'] }}
        </h4>
    </div>
</body>
</html>