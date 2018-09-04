<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
	protected $table = "preguntas";

	protected $primaryKey = 'id_preguntas';

	protected $fillable = [
		'preguntas',
		'id_usu',
		
	];
	public function usuario()
	{

    return $this->belonsTo('App\Usuario');
    
	}

	public function respuesta()
	{
		return $this->hasOne('App\Respuestas');
	}
}
