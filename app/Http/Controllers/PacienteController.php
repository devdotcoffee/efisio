<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PacienteValidation;
use Validator;
use App\Paciente;

class PacienteController extends Controller
{
    public function indexPage()
    {
        return view('paciente.paciente');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::todos();
        return view('paciente.consulta', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteValidation $request)
    {
        $request->validated();
        $paciente = Paciente::salvarPaciente();
        return redirect()->route('fisio.detalhe-paciente', $paciente['idPaciente']);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeAJAX(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nome' => 'required',
        ]);

        if ($validation->passes()) 
        {   
            $paciente = Paciente::salvar($request);
            return json_encode(['success' => $request->nome]);
        } else {
            return json_encode(['errors' => $validation->errors()]);
        }

    }
}
