<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_productos', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('comentario_productos');
    }
}
