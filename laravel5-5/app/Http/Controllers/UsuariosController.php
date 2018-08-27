<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Encuesta;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        return view('bienvenido');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveenc(Request $request)
    {
        //$encuesta = new Encuesta;
        foreach($request->all() as $req){
        $encuesta = new Encuesta;
        $encuesta->id_usu = $request->get('id');
        $encuesta->pregunta = $request->get('pA');
        $encuesta->respuesta = $req['1a'];
        $encuesta->respuesta = $req['1b'];
        $encuesta->respuesta = $req['1c'];
        $encuesta->respuesta = $req['1d'];
        $encuesta->respuesta = $req['1e'];
        $encuesta->save();
        }
        return "exito";
    }

    /**
     * Store a newly created resource in storage.
     *  
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
           $id = DB::getPdo()->lastInsertId();
            return view('encuesta1',['id'=>$id]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $usuario = Usuario::paginate(10);
        return view('usuarios.resultado',['usuario' => $usuario]);
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
}
