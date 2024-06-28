<?php

namespace App\Http\Controllers;
use App\Models\payment;
use App\Models\Laboratory;
use App\Models\Gastos;

use Illuminate\Http\Request;
class AccountingController extends Controller{
    
    public function __construct(request $request) {
        $this->Payment = new Payment();
        $this->Laboratory = new Laboratory();
        $this->Gastos = new Gastos();
    }
    // PAGOS 
    public function getPayments() {
      return $this->Payment->getPayments();
    }

    // GASTOS
    public function getGasto(){
      return  $this->Gastos->getGasto();  
    }
    public function createGasto(Request $request){
     
    }

    public function updateGasto(Request $request){
        
    }

    // FINANZAS
    public function CreateEspeciality(Request $request) {
      $comision_aproximada = $request->input("comision_aproximada");
      $estado = $request->input("estado");
      $descripcion = $request->input("descripcion");
      $costo = $request->input("costo");
      $usuario = $request->input("usuario");
      
      $especiality = [
        "comision_aproximada" => $comision_aproximada,
        "estado" => $estado,
        "descripcion" => $descripcion,
        "costo" => $costo,
        "usuario" => $usuario,
      ];

      try {
        $this->Laboratory->CreateEspeciality($especiality);

        return response()->json([
          'message' => 'La especialidad se ha creado en la base de datos',
          'status' => 200
        ]);
      }
      catch(\exception $e) {
        return response()->json([
          'status' => 400,
          'message' => $e->getMessage()
        ]);
      }
    }

    public function CreateLaboratory(Request $request) {
      $nombre = $request->input("nombre");
      $precio = $request->input("precio");
      $estado = $request->input("estado");
      $usuario = $request->input("usuario");
      

      $laboratory = [
        "nombre" => $nombre,
        "precio" => $precio,
        "estado" => $estado,
        "usuario" => $usuario,
      ];

      try {
        $this->Laboratory->CreateLaboratory($laboratory);

        return response()->json([
          'message' => 'El laboratorio se ha creado en la base de datos',
          'status' => 200
        ]);
      }
      catch(\exception $e) {
        
        return response()->json([
          'status' => 400,
          'message' => $e->getMessage()
        ]);
      }

    }
}
