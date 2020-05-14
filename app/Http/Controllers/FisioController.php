<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FisioValidation;
use App\Fisio;

class FisioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fisios = Fisio::todos();
        return view('fisio.consulta', compact('fisios'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fisio.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FisioValidation $request)
    {   
        $request->validated();
        Fisio::salvar($request);
        return redirect()->route('lista-fisios');
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
        $fisio = Fisio::getFisioById($id);
        return view('fisio.editar', compact('fisio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FisioValidation $request, $id)
    {
        $request->validated();
        Fisio::alterar($id, $request);
        return redirect()->route('lista-fisios');
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
}
