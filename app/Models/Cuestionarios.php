<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestionarios extends Model
{
    use HasFactory;

    //Relacion muchos a muchos
public function usuario(){
    return $this->belongToMany('app\Models\Usuario');

}


//relacion unos a muchos
public function preguntas(){

return $this->hasMany('App\Models\Preguntas');

}
}
