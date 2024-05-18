<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admisiones', function (Blueprint $table) {
            $table->id();
            $table->string("paciente");
            $table->integer("medico");
            $table->integer("especialidad");
            $table->string("cola_atencion");
            $table->string("costo");
            $table->string("comision");
            $table->string("estado");
            $table->integer("turno");
            $table->string("usuario");
            $table->integer("orden__");
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
        Schema::dropIfExists('admisiones');
    }
}
