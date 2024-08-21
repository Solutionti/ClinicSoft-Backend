<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// importante
use Illuminate\Support\Facades\DB;

class Ecografia extends Model
{
    use HasFactory;

    public function pruebaCrear($ecografia) {
    //   $prueba = DB::table("ecografias")
    //       ->select("*")
    //       ->get();
      
    //   return $prueba;
     
    //crear una ecografia 
    
    //definicion
      $ecografia = [
        "dni_paciente" => $cografias['dni'],
    ];

    //salida
    DB::table("ecografias")
       ->insert($ecografia);
        
    }

}
