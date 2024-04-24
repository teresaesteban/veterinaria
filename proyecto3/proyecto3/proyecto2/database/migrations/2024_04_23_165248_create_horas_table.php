<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorasTable extends Migration
{
    public function up()
    {
        Schema::create('horas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->unsignedTinyInteger('hora');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('horas');
    }
}
