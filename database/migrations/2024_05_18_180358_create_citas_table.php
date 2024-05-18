<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string("documento");
            $table->string("nombre");
            $table->string("telefono");
            $table->integer("doctor");
            $table->date("fecha");
            $table->date("fechafin");
            $table->string("hora");
            $table->string("comentarios");
            $table->string("estado");
            $table->string("usuario");
            $table->string("solicitud");
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
        Schema::dropIfExists('citas');
    }
}
