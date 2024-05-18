<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("categoria");
            $table->string("codigo");
            $table->string("codigo_barras");
            $table->string("nombre");
            $table->string("medida");
            $table->string("precio");
            $table->string("moneda");
            $table->string("descripcion");
            $table->string("stock");
            $table->string("estado");
            $table->string("cantidad");
            $table->string("fecha");
            $table->string("hora");
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
        Schema::dropIfExists('productos');
    }
}
