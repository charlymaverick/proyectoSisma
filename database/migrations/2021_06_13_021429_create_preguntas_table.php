<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::disableForeignKeyConstraints();
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id();
            $table->string('Respuesta_correcta');
            $table->string('Respuesta_2');
            $table->string('Respuesta_3');
            $table->string('Respuesta_4');
            $table->string('Enunciado_video');
            $table->string('Imagen');
            $table->string('Archivo');
            $table->string('Enunciado');
            $table->boolean('Activo');
            $table->foreignId('cuestionario_id')->constrained('cuestionarios');
            $table->timestamps();

           /* $table->foreign('cuestionario_id')->references('id')->on('cuestionarios')->onDelete('');*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preguntas');
    }
}
