<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('id_respuestas');
            $table->string('respuesta1');
            $table->string('respuesta2');
            $table->string('respuesta3');
            $table->string('respuesta4');
            $table->string('respuesta5');
            $table->integer('id_preguntas')->unsigned();
            $table->foreign('id_preguntas')->references('id_preguntas')->on('preguntas');
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
        Schema::dropIfExists('respuestas');
    }
}
