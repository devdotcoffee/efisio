<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProntuarioValidation;
use App\Prontuario;
use App\Paciente;

class ProntuarioController extends Controller
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
    public function index()
    {
        $prontuarios = Prontuario::todos();
        return view('prontuario.consulta', compact('prontuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $paciente = Paciente::getPacienteById($id);
        return view('prontuario.cadastro', compact('paciente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, ProntuarioValidation $request)
    {
        $request->validated();
        Prontuario::salvar($id, $request);
        return redirect()->route('detalhe-paciente', $id);
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
        $prontuario = Prontuario::getProntuarioById($id);
        return view('prontuario.editar', compact('prontuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProntuarioValidation $request, $id)
    {
        $request->validated();
        Prontuario::alterar($id, $request);
        $prontuario = Prontuario::getProntuarioById($id);
        return redirect()->route('detalhe-paciente', $prontuario['idPaciente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prontuario::apagar($id);
    }
}
