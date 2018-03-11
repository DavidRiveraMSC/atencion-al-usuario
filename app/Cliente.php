<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $table = "clientes";

    protected $fillable =
     ['num_expediente',
      'nombre',
      'primer_apellido',
      'segundo_apellido',
      'direccion',
      'tel_conv',
      'tel_cel',
      'correo',
      'departamento',
      'municipio',
      'tipo_cliente',
      'sucursales'];
}
