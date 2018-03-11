<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num_expediente');
            $table->string('nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('direccion');            
            $table->integer('tel_conv')->nullable();
            $table->integer('tel_cel')->nullable();
            $table->string('correo')->nullable();
            $table->string('departamento');
            $table->string('municipio');
            $table->string('tipo_cliente');
            $table->string('sucursales');            
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
        Schema::dropIfExists('clientes');
    }
}
