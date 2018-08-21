<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    return $this->belongsTo('App\Usuario');
}
