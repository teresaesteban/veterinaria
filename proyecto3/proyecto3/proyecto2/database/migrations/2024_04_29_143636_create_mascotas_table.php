<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration
{
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('tipo');
            $table->string('raza')->nullable();
            $table->integer('edad')->nullable();
            // Agrega más columnas según necesites
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
}
