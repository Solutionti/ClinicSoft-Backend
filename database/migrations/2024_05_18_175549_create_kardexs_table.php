<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKardexsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kardexs', function (Blueprint $table) {
            $table->id();
            $table->string("id_producto"); 
            $table->string("tp_documento");
            $table->integer("entrada");
            $table->integer("salida");
            $table->integer("devolucion");
            $table->date("fecha");
            $table->string("hora");
            $table->string("descripcion");
            $table->string("usuario");
            $table->string("sede");
            $table->string("motivo");
            $table->integer("saldo");
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
        Schema::dropIfExists('kardexs');
    }
}
