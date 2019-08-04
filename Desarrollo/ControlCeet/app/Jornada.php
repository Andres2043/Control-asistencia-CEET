<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $table="jornada";
    protected $primarykey="id_jornada";
    protected $fillable=["Tipo_jornada"];
}
