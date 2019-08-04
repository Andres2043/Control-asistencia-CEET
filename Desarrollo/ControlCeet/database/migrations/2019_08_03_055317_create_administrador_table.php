<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
            $table->increments('id_administrador');
            $table->string('primer_nombre' , 75);
            $table->string('segundo_nombre' , 75);
            $table->string('primer_apellido' , 75);
            $table->string('segundo_apellido' , 75);
            $table->string('documento', 15);
            $table->string('correo', 100);
            $table->string('contraseña', 100);
            $table->integer('fk_tipo_documento')->unsigned();
            $table->foreign('fk_tipo_documento')->references('id_documento')->on('tipo_documento');
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
        Schema::dropIfExists('administrador');
    }
}
