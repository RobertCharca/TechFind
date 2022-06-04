<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negocios', function (Blueprint $table) {
            $table->id('_id');
            $table->string('nombre_negocio');
            $table->string('descripcion');
            $table->string('hora_atencion');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('imagen_portada');
            $table->string('imagen_negocio');

            $table->id('categorias_id');
            $table->id('usuario_id');
            $table->foreign('categorias_id')->references('_id')->on('categorias');
            $table->foreign('usuario_id')->references('_id')->on('usuarios');

            $table->string('correo_electronico');
            $table->string('fecha_creacion');
            $table->string('fecha_actualizacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('negocios');
    }
}
