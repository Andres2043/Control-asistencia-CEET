<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table="usuario";
    protected $primarykey="id_usuario";
    protected $fillable=["primer_nombre", "segundo_nombre", "primer_apellido", "segundo_apellido", "documento", "correo", "fk_tipo_documento2", "fk_tipoUsuario"];
}
