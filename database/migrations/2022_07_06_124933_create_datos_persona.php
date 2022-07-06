<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_persona', function (Blueprint $table) {
            /* $table->id();
            $table->timestamps(); */

            $table->engine = 'InnoDB';   
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('direccion');
            $table->string('celular');
            $table->boolean('estado');
          //  $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_persona');
    }
};
