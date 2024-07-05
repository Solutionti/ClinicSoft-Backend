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
      $tipo_doc = $request->input("tipo_doc");
      $nro_doc = $request->input("nro_doc");
      $razon_social = $request->input("razon_social");
      $descripcion = $request->input("descripcion");
      $f_recepcion = $request->input("f_recepcion");
      $f_emision = $request->input("f_emision");
      $tipo_cpe = $request->input("tipo_cpe");
      $serie = $request->input("serie");
      $numero = $request->input("numero");
      $sub_total = $request->input("sub_total");
      $igv = $request->input("igv");
      $op_grav = $request->input("op_grav");
      $op_inafec = $request->input("op_inafec");
      $op_exone = $request->input("op_exone");
      $monto = $request->input("monto");
      $rpta_sunat = $request->input("rpta_sunat");
      $estado = $request->input("estado");
      $codigo_usuario = $request->input("codigo_usuario");
      $codigo_usuario_sys = $request->input("codigo_usuario_sys");

      $datos = [
        "tipo_doc" => $tipo_doc,
        "nro_doc" => $nro_doc,
        "razon_social" => $razon_social,
        "descripcion" => $descripcion,
        "f_recepcion" => $f_recepcion,
        "f_emision" => $f_emision,
        "tipo_cpe" => $tipo_cpe,
        "serie" => $serie,
        "numero" => $numero,
        "sub_total" => $sub_total,
        "igv" => $igv,
        "op_grav" => $op_grav,
        "op_inafec" => $op_inafec,
        "op_exone" => $op_exone,
        "monto" => $monto,
        "rpta_sunat" => $rpta_sunat,
        "estado" => $estado,
        "codigo_usuario" => $codigo_usuario,
        "codigo_usuario_sys" => $codigo_usuario_sys,
      ];

      $this->Gastos->createGasto($datos);

      return response()->json([
        'message' => 'El gasto se ha creado en la base de datos',
        'status' => 200
      ]);
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
