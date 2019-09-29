<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePredio extends Migration
{
    public function up()
    {
        Schema::create('predios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_predio',150);
            $table->string('direccion');
            $table->integer('cedula_cadastral');
            $table->bigInteger('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('predios');
    }
}
