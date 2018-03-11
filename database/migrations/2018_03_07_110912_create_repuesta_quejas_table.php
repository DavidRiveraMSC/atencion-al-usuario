<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepuestaQuejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repuesta_quejas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('explicacion');
            $table->string('resolucion');
            $table->string('visto_resultas');
            $table->string('respuesta_resolucion');
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
        Schema::dropIfExists('repuesta_quejas');
    }
}
