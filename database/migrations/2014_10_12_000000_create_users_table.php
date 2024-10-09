<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('ip');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('empresa');
            $table->string('telefono');
            $table->string('rol_usuario');
            $table->string('estado');
            $table->string('usuario_creacion');
            $table->string('cmp');
            $table->string('color');
            // $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
