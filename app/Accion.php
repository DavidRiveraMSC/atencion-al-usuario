<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
	protected $table = "accions";

	protected $fillable =
	['detalle_accion',
	'peticion_usuario',
	'estado',
	'resolucion_idresolucion',
	'cliente_num_expediente',
	'via_recepcion_idrecepcion',
	'tipo_accion_idaccion',
	'repuesta_queja_idrepuesta_queja',
	'repuesta_consulta_idrepuesta_consulta'];
}
