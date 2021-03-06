<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FisioValidation;
use App\Fisio;
use App\FisioLogin;

class FisioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:fisio');
    }

    public function home()
    {
        return view('fisio.home');
    }
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
        $usuario    = FisioLogin::getByFisio($id);
        $fisio      = Fisio::getFisioById($id);
        return view('fisio.editar', [
            'fisio'     => $fisio,
            'usuario'   => $usuario
        ]);
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

    public function destroyAJAX($id)
    {
        Fisio::deletar($id);
    }
}
