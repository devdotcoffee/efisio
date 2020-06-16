<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EvolucaoValidation;
use App\Evolucao;
use App\Prontuario;

class EvolucaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:fisio');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $prontuario = Prontuario::getProntuarioById($id);
        $evolucoes = Evolucao::getEvolucaoByProntuario($id);
        return view('evolucao.consulta', ['evolucoes' => $evolucoes, 'prontuario' => $prontuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('evolucao.cadastro', ['prontuario' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EvolucaoValidation $request, $prontuario)
    {
        $request->validated();
        Evolucao::salvar($request, $prontuario);
        return redirect()->route('lista-evolucoes', $prontuario);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evolucao = Evolucao::getEvolucaoById($id);
        return view('evolucao.editar', compact('evolucao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EvolucaoValidation $request, $id)
    {
        $evolucao = Evolucao::alterar($request, $id);
        return redirect()->route('lista-evolucoes', $evolucao['idProntuario']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Evolucao::deletar($id);
    }
}
