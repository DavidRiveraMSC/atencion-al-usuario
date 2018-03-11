<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResolucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resolucions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('relacion_hechos');
            $table->string('visto_resultas');
            $table->string('considerando');
            $table->string('resuelve');
            $table->string('fundamente');
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
        Schema::dropIfExists('resolucions');
    }
}
