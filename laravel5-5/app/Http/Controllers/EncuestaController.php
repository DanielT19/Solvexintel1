<?php

namespace App\Http\Controllers;

use App\Encuesta;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Usuario;
use App\Respuestas;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index()
    {
        
    }

    public function resultados()
    {
       
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
    public function storeP1(Request $request)
    {
        $encuesta = new Encuesta;

        $encuesta->pregunta = $request->get('pA');
        $encuesta->respuesta = $request->get('1a');
        $encuesta->save();
    }

    public function storeP2(Request $request)
    {
        $encuesta = new Encuesta;

        $encuesta->pregunta = $request->get('pA');
        $encuesta->respuesta = $request->get('1a');
        $encuesta->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function show(Encuesta $encuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Encuesta $encuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encuesta $encuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Encuesta  $encuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encuesta $encuesta)
    {
        //
    }
}
