<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->string("dni_paciente"); 
            $table->integer("medico"); 
            $table->integer("especialidad"); 
            $table->string("atencion"); 
            $table->date("fecha"); 
            $table->string("hora"); 
            $table->float("descuento"); 
            $table->float("comision"); 
            $table->string("descripcion"); 
            $table->float("total"); 
            $table->float("cantidad_recibida"); 
            $table->string("tipo_deposito"); 
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
        Schema::dropIfExists('pagos');
    }
}
