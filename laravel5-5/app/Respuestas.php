<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    protected $table = 'respuestas';

	protected $primaryKey = 'id_respuestas';	

    protected $filleable = [

    	'respuesta1',
    	'respuesta2',
    	'respuesta3',
    	'respuesta4',
    	'respuesta5',
    	'id_preguntas'
    ];

    public function encuesta()
	{

    return $this->belongsTo('App\Encuesta');
    
	}
}
