<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('idU');
            $table->string('genero', 20);
            $table->string('nombre');
            $table->string('tipo',10);
            $table->longText('descripcion');
            $table->longText('video');
            $table->string('path');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representantes');
    }
}
