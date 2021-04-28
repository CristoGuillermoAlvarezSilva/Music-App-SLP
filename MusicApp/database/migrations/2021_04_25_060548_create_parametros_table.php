<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idR');
            $table->bigInteger('precioBase');
            $table->bigInteger('personasBase');

            $table->bigInteger('precioMedio');
            $table->bigInteger('personasMedio');

            $table->bigInteger('precioAlto');
            $table->bigInteger('personasAlto');

            $table->bigInteger('precioMax');
            $table->bigInteger('personasMax');
           
            $table->bigInteger('anticipo');
            

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
        Schema::dropIfExists('parametros');
    }
}
