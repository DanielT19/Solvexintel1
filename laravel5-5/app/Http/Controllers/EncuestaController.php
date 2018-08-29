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
        $encuesta->preguntas = $request->get('pA');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1a');
        $respuesta->respuesta2 = $request->get('2a');
        $respuesta->respuesta3 = $request->get('3a');
        $respuesta->respuesta4 = $request->get('4a');
        $respuesta->respuesta5 = $request->get('5a');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();

            return view('encuestas.encuesta2',['id'=>$id]);
    }

    public function storeP2(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pB');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1b');
        $respuesta->respuesta2 = $request->get('2b');
        $respuesta->respuesta3 = $request->get('3b');
        $respuesta->respuesta4 = $request->get('4b');
        $respuesta->respuesta5 = $request->get('5b');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta3',['id'=>$id]);
    }

    public function storeP3(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pC');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1c');
        $respuesta->respuesta2 = $request->get('2c');
        $respuesta->respuesta3 = $request->get('3c');
        $respuesta->respuesta4 = $request->get('4c');
        $respuesta->respuesta5 = $request->get('5c');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta4',['id'=>$id]);
    }

    public function storeP4(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pD');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1d');
        $respuesta->respuesta2 = $request->get('2d');
        $respuesta->respuesta3 = $request->get('3d');
        $respuesta->respuesta4 = $request->get('4d');
        $respuesta->respuesta5 = $request->get('5d');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta5',['id'=>$id]);
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
