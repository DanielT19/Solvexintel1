<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
	use SoftDeletes;

	protected $table = 'usuario';

	protected $primaryKey = 'id_usu';
	
    protected $fillable = ['nombre','email'];

     protected $dates = ['deleted_at'];

     public function usuario()
     {
     	return $this->hasOne('App\Encuesta')
     }
}
