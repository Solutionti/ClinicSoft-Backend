<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaTiemposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_tiempos', function (Blueprint $table) {
            $table->id();
            $table->string("dni_paciente");
            $table->string("tp_atencion");
            $table->string("fecha");
            $table->string("hora");
            $table->string("usuario");
            $table->string("id__doctor");
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
        Schema::dropIfExists('linea_tiempos');
    }
}
