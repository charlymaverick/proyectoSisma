<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestionarios extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'Tipo_usuario',
        'Fecha_inicio',
        'Fecha_final',
        'Tipo_Cuestionario',
        'color',
        'Activo'
    ];

    //Relacion muchos a muchos
public function usuario(){
    return $this->belongToMany('app\Models\Usuarios');

}


//relacion unos a muchos
public function preguntas(){

return $this->hasMany('App\Models\Preguntas');

}
}
