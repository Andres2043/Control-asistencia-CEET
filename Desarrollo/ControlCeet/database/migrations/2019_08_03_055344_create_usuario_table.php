<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('primer_nombre' , 75);
            $table->string('segundo_nombre' , 75);
            $table->string('primer_apellido' , 75);
            $table->string('segundo_apellido' , 75);
            $table->string('documento', 15);
            $table->string('correo', 100);
            $table->integer('fk_tipo_documento2')->unsigned();
            $table->integer('fk_tipoUsuario')->unsigned();
            $table->foreign('fk_tipo_documento2')->references('id_documento')->on('tipo_documento');
            $table->foreign('fk_tipoUsuario')->references('id_tipoUsuario')->on('tipo_usuario');
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
        Schema::dropIfExists('usuario');
    }
}
