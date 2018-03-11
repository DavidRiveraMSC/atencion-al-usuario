<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('detalle_accion');
            $table->string('peticion_usuario');
            $table->string('estado');
            $table->integer('resolucion_idresolucion')->nullable()->unsigned();
            $table->integer('cliente_num_expediente')->unsigned();
            $table->integer('via_recepcion_idrecepcion')->unsigned();
            $table->integer('tipo_accion_idaccion')->unsigned();
            $table->integer('repuesta_queja_idrepuesta_queja')->nullable()->unsigned();
            $table->integer('repuesta_consulta_idrepuesta_consulta')->nullable()->unsigned();

            $table->foreign('resolucion_idresolucion')
            ->references('id')->on('resolucions')->onDelete('cascade');

            $table->foreign('cliente_num_expediente')
            ->references('id')->on('clientes')->onDelete('cascade');

            $table->foreign('via_recepcion_idrecepcion')
            ->references('id')->on('via_recepcions')->onDelete('cascade');

            $table->foreign('tipo_accion_idaccion')
            ->references('id')->on('tipo_accions')->onDelete('cascade');

            $table->foreign('repuesta_queja_idrepuesta_queja')
            ->references('id')->on('repuesta_quejas')->onDelete('cascade');

            $table->foreign('repuesta_consulta_idrepuesta_consulta')
            ->references('id')->on('repuesta_consultas')->onDelete('cascade');



            
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
        Schema::dropIfExists('accions');
    }
}
