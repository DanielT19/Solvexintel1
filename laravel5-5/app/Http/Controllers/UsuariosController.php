<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Encuesta;
use App\Respuestas;
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

    public function resultado()
    {
        $usuario = Usuario::paginate(10);
       // $id = Usuario::findOrfail($id->id_usu);
        $pregunta = DB::table('preguntas')->get();
        $respuesta = DB::table('respuestas')->get();
        $s1 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        ->select('u.id_usu','u.email','p.id_preguntas','p.preguntas','r.id_respuestas','r.respuesta1','r.respuesta2','r.respuesta3','r.respuesta4','r.respuesta5')
        ->where('u.id_usu','=',"1")
        ->get();
        //Se consulta cada respuesta con funcion al ID del usuario
        $s1 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        ->select(DB::raw('SUM(respuesta1) as s1'))
        ->where('u.id_usu','=',"1")
        ->whereIn('p.preguntas',['A','G','M'])
        ->first();
        //respuesta 2

        $s2 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        
        ->where('u.id_usu','=',"1")
        ->whereIn('p.preguntas',['B','H','N'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta2) as s2')) 
        ->first();   
        //repuesta3
         $s3 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        
        ->where('u.id_usu','=',"1")
        ->whereIn('p.preguntas',['C','I','O'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta5) as s3')) 
        ->first();   
        //respuesta4
        $s4 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        
        ->where('u.id_usu','=',"1")
        ->whereIn('p.preguntas',['D','J','P'])
       // ->where('p.preguntas','=','A')
        ->select(DB::raw('SUM(respuesta4) as s4')) 
        ->first();   

<<<<<<< HEAD
=======
        $arr = array($s1,$s2,$s3,$s4);
        //    list($a[0],$a[1],$a[2],$a[3]) = $s;
       return $arr;
        //  return $s1;
>>>>>>> d5cddd80cc7fdfaa1d0bce8a327109a8af44513b

       

        return view('usuarios.resultado',['usuario' => $usuario,'pregunta'=>$pregunta,'s1'=>$s1]);
    }

    public function verRes($id)
    {
        $usuario = Usuario::findOrfail($id);
        $pregunta = DB::table('preguntas')->get();
        $respuesta = DB::table('respuestas')->get();
        $todo = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->join('usuario as u', function($join){
            $join->on('p.id_usu', '=', 'u.id_usu');
        })
        ->select('u.id_usu','u.email','p.id_preguntas','p.preguntas','r.id_respuestas','r.respuesta1','r.respuesta2','r.respuesta3','r.respuesta4','r.respuesta5')
        ->where('u.id_usu','=',$id)
        ->get();

        /*$s1 = DB::table('preguntas as p')
        ->join('respuestas as r', function($on){
            $on->on('p.id_preguntas','=','r.id_preguntas');
        })
        ->select('p.id_preguntas','p.preguntas')*/

        $resultados = collect();

        foreach($respuestas->id_preguntas as $respuesta) {
             $respuesta->id_respuesta = array_sum(array_only($respuesta->id_respuesta, ['respuesta1', 'respuesta2', 'respuesta3', 'respuesta4', 'respuesta5']));
             $resultados->push($respuesta);
        }
        return $resultados;
        $s = 0;
        $i = 0;
        $p = 0;
        $r = 0;
        return view('usuarios.resultadoxusuario',['usuario' => $usuario,'pregunta'=>$pregunta,'s1'=>$s1]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
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
            return view('encuestas.encuesta1',['id'=>$id]);
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
