<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table="administrador";
    protected $primarykey="id_administrador";
    protected $fillable=["primer_nombre", "segundo_nombre", "primer_apellido", "segundo_apellido", "documento", "correo", "contraseña", "fk_tipo_documento"];
}
