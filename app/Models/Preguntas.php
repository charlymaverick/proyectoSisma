<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;
    protected $fillable = [
        'Respuesta_correcta',
        'Respuesta_2',
        'Respuesta_3',
        'Respuesta_4',
        'Enunciado_video',
        'Imagen',
        'Archivo',
        'Enunciado',
        'Activo',
        'cuestionarios_id'
    ];


    //relacion unos a muchos (inversa)
public function cuestionario(){

    return $this->belongsTo('App\Models\Cuestionarios');

}

}
