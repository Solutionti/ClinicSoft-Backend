<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
          'usuario' => 'jersongalvez',
          'ip' => '',
          'password' => bcrypt('1234'),
          'email' => 'admin@gmail.com',
          'nombre' => 'Jerson Galvez',
          'apellido' => 'Ensuncho',
          'empresa' => 'HOSPEDALE',
          'telefono' => '3155639791',
          'rol_usuario' => 'Administrador',
          'estado' => 'Activo',
          'usuario_creacion' => 'clinicSoft',
          'cmp' => '',
        ]);

    }
}
