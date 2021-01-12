<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_juego');
            $table->string('name');
            $table->string('url');
            $table->string('descripcion');
            $table->string('url_imagen');
            $table->boolean('estatus');
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
        Schema::dropIfExists('juegos');
    }
}
