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
	public function usuarios()
	{

    return $this->hasMany('App\Usuario');
    
	}

	public function respuestas()
	{
		return $this->belongsTo('App\Respuestas');
	}
}
