<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_cues extends Model
{
    use HasFactory;

    //Relacion muchos a muchos
public function cuestionario(){
    return $this->belongToMany('app\Models\Cuestionario');

}
}