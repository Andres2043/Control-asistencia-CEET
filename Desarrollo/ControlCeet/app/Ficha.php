<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $table="ficha";
    protected $primarykey="id_ficha";
    protected $fillable=["num_ficha", "nombre_ficha", "fk_jornada"];
}
