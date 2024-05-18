<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColposcopiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colposcopias', function (Blueprint $table) {
            $table->id();
            $table->string("paciente");
            $table->date("fecha");
            $table->string("medico");
            $table->string("escamo_columnar");
            $table->string("endo_cervix");
            $table->string("vagina");
            $table->string("vulva");
            $table->string("perineo");
            $table->string("region_parianal");
            $table->string("biopsia");
            $table->string("papanicolaou");
            $table->string("conclusiones");
            $table->string("imagen1");
            $table->string("imagen2");
            $table->string("usuario");
            $table->string("cmp");
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
        Schema::dropIfExists('colposcopias');
    }
}
