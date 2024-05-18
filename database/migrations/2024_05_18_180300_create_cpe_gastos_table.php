<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpeGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpe_gastos', function (Blueprint $table) {
            $table->id();
            $table->integer("tipo_doc");
            $table->string("nro_doc");
            $table->string("razon_social");
            $table->string("descripcion");
            $table->date("f_recepcion");
            $table->date("f_emision");
            $table->integer("tipo_cpe");
            $table->string("serie");
            $table->integer("numero");
            $table->float("sub_total");
            $table->float("igv");
            $table->double("op_grav");
            $table->double("op_inafec");
            $table->double("op_exone");
            $table->float("monto");
            $table->string("rpta_sunat");
            $table->string("estado");
            $table->integer("codigo_usuario");
            $table->integer("codigo_usuario_sys");
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
        Schema::dropIfExists('cpe_gastos');
    }
}
