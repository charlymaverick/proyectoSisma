<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('usuarios', function (Blueprint $table) {
                $table->id();
                $table->string('Nombre');
                $table->string('Apellido');
                $table->integer('Edad');
                $table->string('Sexo');
                $table->string('Correo');
                $table->string('Celular');
                $table->string('Rol');
                $table->float('Altura');
                $table->float('Peso');
                $table->string('Riesgo-salud');
                $table->string('Incentivos');
                $table->string('Calificacion');
                $table->boolean('Activo');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
