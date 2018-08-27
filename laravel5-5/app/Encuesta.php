<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
	protected $table = "encuesta";
	protected $fillable = [
		'pregunta',
		'respuesta',
		'id_usu',
		
	];
	public function usuarios()
	{

    return $this->hasMany('App\Usuario');
    
	}
}
