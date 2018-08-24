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
    return $this->belongsTo('App\Usuario', 'id_usu');
}
