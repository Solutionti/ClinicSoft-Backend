<?php

namespace App\Http\Controllers;

//o importamos o llamamos el modelo
use App\Models\Ecografia;

use Illuminate\Http\Request;

class EcografiasController extends Controller {

    public function __construct() {
      $this->Ecografia = new Ecografia();
    }
   
    public function pruebaCrear(Request $request ) {
      //definir la variable y acceder al campo de la peticion
      $dni = $request->input("dni");
      $dni = $request->dni;
      //acceder a todas los datos que vienen por la peticion
      print_r($request->all());

      //definicion del array 
      $ecografia = [
        "dni" => $dni,
      ];

      //parte seguridad
    //   if(!$paciente->isEmpty()) {
    //     throw new \Exception('Ya existe un paciente en la base de datos');
    //   }
      try {

      } 
      catch(\exception $e) {

      }

    // salida    
      $this->Ecografia->pruebaCrear($ecografia);
    }


}
