<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTriajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('triajes', function (Blueprint $table) {
            $table->id();
            $table->string("presion_arterial");
            $table->string("temperatura");
            $table->string("frecuencia_respiratoria");
            $table->string("frecuencia_cardiaca");
            $table->string("saturacion");
            $table->string("peso");
            $table->string("talla");
            $table->string("imc");
            $table->string("paciente");
            $table->string("doctor");
            $table->string("especialidad");
            $table->string("estado");
            $table->string("usuario");
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
        Schema::dropIfExists('triajes');
    }
}
