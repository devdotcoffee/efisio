<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prontuario extends Model
{
    protected $table = 'prontuarios';
    
    public static function todos()
    {
        $prontuarios = new Prontuario();
        return $prontuarios
                        ->join('pacientes', 'prontuarios.idPaciente', '=', 'pacientes.idPaciente')
                        ->join('fisioterapeutas', 'prontuarios.idFisioterapeuta', '=', 'fisioterapeutas.idFisioterapeuta')
                        ->select('prontuarios.*', 'fisioterapeutas.nome as fisio', 'pacientes.nome as paciente')
                        ->get();
    }

    public static function getProntuarioByPaciente($id)
    {
        return self::where('idPaciente', $id);
    }
    public static function salvar($id, $request)
    {
        $prontuario = new Prontuario();
        $prontuario->data = $request->input('prontuarioData');
        $prontuario->diagnostico_clinico = $request->input('prontuarioDiagClinico');
        $prontuario->historia_clinica = $request->input('prontuarioHistoriaClinica');
        $prontuario->queixa_principal = $request->input('prontuarioQueixa');
        $prontuario->habitos_vida = $request->input('prontuarioHabito');
        $prontuario->hma = $request->input('prontuarioHma');
        $prontuario->hmp = $request->input('prontuarioHmp');
        $prontuario->antecedente_pessoal = $request->input('prontuarioAntPes');
        $prontuario->antecedente_familiar = $request->input('prontuarioAntFam');
        $prontuario->tratamento_realizado = $request->input('prontuarioTrat');
        $prontuario->apresentacao_paciente = $request->input('prontuarioAprePaci');
        $prontuario->exame_complementar = $request->input('prontuarioExameComplementar');
        $prontuario->medicamento = $request->input('prontuarioMedicamento');
        $prontuario->cirurgia = $request->input('prontuarioCirurgia');
        $prontuario->inspecao = $request->input('prontuarioInspecao');
        $prontuario->semiologia = $request->input('prontuarioSemiologia');
        $prontuario->teste_especifico = $request->input('prontuarioTestes');
        $prontuario->intensidade_dor = $request->input('prontuarioDor');
        $prontuario->objetivo_tratamento = $request->input('prontuarioObjTrat');
        $prontuario->recurso_terapeutico = $request->input('prontuarioRecurTera');
        $prontuario->plano_terapeutico = $request->input('prontuarioPlanoTer');
        $prontuario->diagnostico_fisioterapeutico = $request->input('prontuarioDiagFisio');
        $prontuario->idPaciente = $id;
        $prontuario->idFisioterapeuta = 42;
        $prontuario->save();
    }

    public static function getProntuarioById($id)
    {
        return Prontuario::where('idProntuario', $id)
        ->join('pacientes', 'prontuarios.idPaciente', '=', 'pacientes.idPaciente')
        ->join('fisioterapeutas', 'prontuarios.idFisioterapeuta', '=', 'fisioterapeutas.idFisioterapeuta')
        ->select('prontuarios.*', 'fisioterapeutas.nome as fisio', 'fisioterapeutas.*', 'pacientes.nome as paciente', 'pacientes.*')
        ->first();
    }

    public static function alterar($id, $request)
    {
        Prontuario::where('idProntuario', $id)
            ->update([
                'data'                          => $request->input('prontuarioData'),
                'diagnostico_clinico'           => $request->input('prontuarioDiagClinico'),
                'historia_clinica'              => $request->input('prontuarioHistoriaClinica'),
                'queixa_principal'              => $request->input('prontuarioQueixa'),
                'habitos_vida'                  => $request->input('prontuarioHabito'),
                'hma'                           => $request->input('prontuarioHma'),
                'hmp'                           => $request->input('prontuarioHmp'),
                'antecedente_pessoal'           => $request->input('prontuarioAntPes'),
                'antecedente_familiar'          => $request->input('prontuarioAntFam'),
                'tratamento_realizado'          => $request->input('prontuarioTrat'),
                'apresentacao_paciente'         => $request->input('prontuarioAprePaci'),
                'exame_complementar'            => $request->input('prontuarioExameComplementar'),
                'medicamento'                   => $request->input('prontuarioMedicamento'),
                'cirurgia'                      => $request->input('prontuarioCirurgia'),
                'inspecao'                      => $request->input('prontuarioInspecao'),
                'semiologia'                    => $request->input('prontuarioSemiologia'),
                'teste_especifico'              => $request->input('prontuarioTestes'),
                'intensidade_dor'               => $request->input('prontuarioDor'),
                'objetivo_tratamento'           => $request->input('prontuarioObjTrat'),
                'recurso_terapeutico'           => $request->input('prontuarioRecurTera'),
                'plano_terapeutico'             => $request->input('prontuarioPlanoTer'),
                'diagnostico_fisioterapeutico'  => $request->input('prontuarioDiagFisio')
            ]);
    }

    public static function apagar($id)
    {
        self::where('idProntuario', $id)->delete();
    }
}
