<?php

namespace App\Http\Controllers;

use App\Models\Entrada;
use Illuminate\Http\Request;
use App\Models\Evento;
use App\Http\Requests\EntradasRequest;
class EntradasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Entrada::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntradasRequest $request)
    {
        $entrada = new Entrada();
        $entrada->numero_entrada = $request->numero_entrada;
        $entrada->nombre_cliente = $request->nombre_cliente;
        $entrada->informacion_evento = $request->informacion_evento;
        $entrada->evento_id= $request->evento_id;
        $entrada->save();
        return $entrada;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function show(Entrada $entrada)
    {
        return $entrada;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrada $entrada)
    {
        $entrada->delete();
    }
}
