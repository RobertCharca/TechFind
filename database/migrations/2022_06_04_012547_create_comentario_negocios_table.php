<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_negocios', function (Blueprint $table) {
            $table->bigIncrements('review_negocio_id');
            $table->unsignedBigInteger('usuario');
            $table->foreign('usuario')->references('usuario_id')->on('usuarios');
            $table->smallInteger('valoracion');
            $table->mediumText('texto_comentario');
            $table->text('imagenes');
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
        Schema::dropIfExists('comentario_negocios');
    }
}
