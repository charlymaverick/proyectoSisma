<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;

    //relacion unos a muchos (inversa)
public function cuetionario(){

    return $this->belongsTo('App\Models\Cuestionario');

}

}
