<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiesgosTable extends Migration
{
    public function up()
    {
        Schema::create('riesgos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('probabilidad');
            $table->integer('impacto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('riesgos');
    }
}

?>