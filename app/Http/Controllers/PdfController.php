<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prontuario;
use App\Evolucao;
use PDF;

class PdfController extends Controller
{
    public function builderProntuario($id)
    {
        $prontuario = Prontuario::getProntuarioById($id);
        $evolucoes = Evolucao::getEvolucaoByProntuario($id);

        $pdf = PDF::loadView('pdf.prontuario', ['prontuario' => $prontuario, 'evolucoes' => $evolucoes]);
        
        return $pdf->setPaper('a4')->stream($prontuario['data'].'.pdf');
    }

}
