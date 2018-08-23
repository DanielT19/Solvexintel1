<?php

namespace App\Http\Controllers;

use App\Encuesta;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Usuario;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('bienvenido');
    }

    public function index()
    {
        return view('encuesta');
    }

    public function resultados()
    {
        return view('resultados');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function storeuser(Request $request)
    {
        request()->validate([
            'nombre' => 'required|min:2',
            'email' => 'required|email'
        ]);
        $usuario = new Usuario;
        $usuario->nombre = $request->get('nombre');
        $usuario->email = $request->get('email');
        $email=$usuario->email;
        $existe = Usuario::where('email',$email)->exists();
        if($existe==$usuario->email)
        {
            return view('bienvenido')->with('usuario','$usuario')->withErrors(['¡Oops, el correo ya fue registrado','Si ya habias completado la encuesta una vez, no es necesarios hacerlo de nuevo']);
        }
        else
        {
            $usuario->save();
            return view('encuesta');
        }
        
    }


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
    public function store(Request $request)
    {
        
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
