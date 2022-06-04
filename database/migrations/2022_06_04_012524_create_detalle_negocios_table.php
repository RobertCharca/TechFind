<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_negocios', function (Blueprint $table) {
            $table->id('_id');
            $table->id('negocio_id');
            $table->id('categoria_id');
            $table->string('telefono');
            $table->string('redes_sociales');
            $table->id('negocio_colaboradores');

            $table->foreign('negocio_id')->references('_id')->on('negocios');
            $table->foreign('categoria_id')->references('_id')->on('categorias');
            $table->foreign('negocio_colaboradores')->references('_id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_negocios');
    }
}
