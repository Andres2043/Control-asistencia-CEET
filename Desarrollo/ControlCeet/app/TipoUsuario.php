<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = "tipo_usuario";
    protected $primarykey = "id_tipoUsuario";
    protected $fillable = ("Usuario");
}
