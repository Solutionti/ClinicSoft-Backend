<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_pacientes', function (Blueprint $table) {
            $table->id();
            $table->integer("tipo_consulta");
            $table->string("paciente");
            $table->integer("doctor");
            $table->integer("triaje");
            $table->integer("codigo_historia");
            $table->string("descripcion");
            $table->string("fecha");
            $table->string("hora");
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
        Schema::dropIfExists('historial_pacientes');
    }
}
