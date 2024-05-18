<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctores', function (Blueprint $table) {
            $table->id();
            $table->string("url_imagen");
            $table->string("cpe");
            $table->string("nombre");
            $table->string("email");
            $table->string("direccion");
            $table->string("telefono");
            $table->string("perfil");
            $table->string("estado");
            $table->string("color");
            $table->string("desde");
            $table->string("hasta");
            $table->string("lunes");
            $table->string("martes");
            $table->string("miercoles");
            $table->string("jueves");
            $table->string("viernes");
            $table->string("sabado");
            $table->string("domingo");
            $table->string("horas_lunes");
            $table->string("horas_martes");
            $table->string("horas_miercoles");
            $table->string("horas_jueves");
            $table->string("horas_viernes");
            $table->string("horas_sabado");
            $table->string("horas_domingo");
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
        Schema::dropIfExists('doctores');
    }
}
