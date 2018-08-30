<?php

namespace App\Http\Controllers;

use App\Encuesta;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Usuario;
use App\Respuestas;
use Illuminate\Support\Facades\Input;

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
        $encuesta->preguntas = Input::get('pD');
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

    public function storeP5(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pE');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1e');
        $respuesta->respuesta2 = $request->get('2e');
        $respuesta->respuesta3 = $request->get('3e');
        $respuesta->respuesta4 = $request->get('4e');
        $respuesta->respuesta5 = $request->get('5e');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta6',['id'=>$id]);
    }

    public function storeP6(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pF');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1f');
        $respuesta->respuesta2 = $request->get('2f');
        $respuesta->respuesta3 = $request->get('3f');
        $respuesta->respuesta4 = $request->get('4f');
        $respuesta->respuesta5 = $request->get('5f');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta7',['id'=>$id]);
    }

    public function storeP7(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pG');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1g');
        $respuesta->respuesta2 = $request->get('2g');
        $respuesta->respuesta3 = $request->get('3g');
        $respuesta->respuesta4 = $request->get('4g');
        $respuesta->respuesta5 = $request->get('5g');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta8',['id'=>$id]);
    }

    public function storeP8(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pH');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1h');
        $respuesta->respuesta2 = $request->get('2h');
        $respuesta->respuesta3 = $request->get('3h');
        $respuesta->respuesta4 = $request->get('4h');
        $respuesta->respuesta5 = $request->get('5h');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta9',['id'=>$id]);
    }

    public function storeP9(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pI');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1i');
        $respuesta->respuesta2 = $request->get('2i');
        $respuesta->respuesta3 = $request->get('3i');
        $respuesta->respuesta4 = $request->get('4i');
        $respuesta->respuesta5 = $request->get('5i');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta10',['id'=>$id]);
    }

    public function storeP10(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pJ');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1j');
        $respuesta->respuesta2 = $request->get('2j');
        $respuesta->respuesta3 = $request->get('3j');
        $respuesta->respuesta4 = $request->get('4j');
        $respuesta->respuesta5 = $request->get('5j');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta11',['id'=>$id]);
    }

     public function storeP11(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pK');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1k');
        $respuesta->respuesta2 = $request->get('2k');
        $respuesta->respuesta3 = $request->get('3k');
        $respuesta->respuesta4 = $request->get('4k');
        $respuesta->respuesta5 = $request->get('5k');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta12',['id'=>$id]);
    }

     public function storeP12(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pL');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1l');
        $respuesta->respuesta2 = $request->get('2l');
        $respuesta->respuesta3 = $request->get('3l');
        $respuesta->respuesta4 = $request->get('4l');
        $respuesta->respuesta5 = $request->get('5l');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta13',['id'=>$id]);
    }

     public function storeP13(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pM');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1m');
        $respuesta->respuesta2 = $request->get('2m');
        $respuesta->respuesta3 = $request->get('3m');
        $respuesta->respuesta4 = $request->get('4m');
        $respuesta->respuesta5 = $request->get('5m');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta14',['id'=>$id]);
    }

     public function storeP14(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pN');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1n');
        $respuesta->respuesta2 = $request->get('2n');
        $respuesta->respuesta3 = $request->get('3n');
        $respuesta->respuesta4 = $request->get('4n');
        $respuesta->respuesta5 = $request->get('5n');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta15',['id'=>$id]);
    }

     public function storeP15(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pO');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1o');
        $respuesta->respuesta2 = $request->get('2o');
        $respuesta->respuesta3 = $request->get('3o');
        $respuesta->respuesta4 = $request->get('4o');
        $respuesta->respuesta5 = $request->get('5o');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta16',['id'=>$id]);
    }

     public function storeP16(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pP');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1p');
        $respuesta->respuesta2 = $request->get('2p');
        $respuesta->respuesta3 = $request->get('3p');
        $respuesta->respuesta4 = $request->get('4p');
        $respuesta->respuesta5 = $request->get('5p');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta17',['id'=>$id]);
    }

     public function storeP17(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pQ');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1q');
        $respuesta->respuesta2 = $request->get('2q');
        $respuesta->respuesta3 = $request->get('3q');
        $respuesta->respuesta4 = $request->get('4q');
        $respuesta->respuesta5 = $request->get('5q');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.encuesta18',['id'=>$id]);
    }

     public function storeP18(Request $request)
    {
        $encuesta = new Encuesta;
        $encuesta->preguntas = $request->get('pR');
        $encuesta->id_usu = $request->get('id');
        $encuesta->save();
        $id = $encuesta->id_usu;
        $respuesta = new Respuestas;
        $respuesta->respuesta1 = $request->get('1r');
        $respuesta->respuesta2 = $request->get('2r');
        $respuesta->respuesta3 = $request->get('3r');
        $respuesta->respuesta4 = $request->get('4r');
        $respuesta->respuesta5 = $request->get('5r');
        $respuesta->id_preguntas = $encuesta->id_preguntas; 
        $respuesta->save();
        return view ('encuestas.success');
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
