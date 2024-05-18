<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string("hc");
            $table->string("url_imagen");
            $table->string("nombre");
            $table->string("apellido");
            $table->string("documento");
            $table->string("email");
            $table->string("direccion");
            $table->string("telefono");
            $table->string("sexo");
            $table->date("fecha_nacimiento");
            $table->integer("edad");
            $table->string("menor_edad");
            $table->string("familiar_documento");
            $table->string("familiar_nombre");
            $table->string("gruposangunieo");
            $table->string("ocupacion");
            $table->string("grado_academico");
            $table->string("estado_civil");
            $table->string("departamento");
            $table->string("provincia");
            $table->string("distrito");
            $table->string("usuario");
            $table->string("estado");
            $table->string("password");
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
        Schema::dropIfExists('pacientes');
    }
}
