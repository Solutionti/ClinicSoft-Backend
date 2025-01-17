<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Report extends Model
{
    use HasFactory;

    public function countPatients() {
      $patientCount = DB::table("pacientes")->count();

      return $patientCount;
    }

    public function countHistory() {
      $patienthistory = DB::table("h_consultas")->count();

      return $patienthistory;
    }

    public function countPagos() {
      $pagos = DB::table("pagos")->count();

      return $pagos;
    }

    public function CountDoctors() {
        $doctores = DB::table("users")
                      ->where("rol_usuario", "Doctor")
                      ->count();

        return $doctores;
    }

    public function newPatients() {
     $fecha = date('Y-m-d');
     $patients = DB::table('pacientes')
                   ->select("*")
                   ->where('creacion_fecha', '=', $fecha)
                   ->get();

     return $patients;
    }

    public function countEfectivo() {
      $fecha = date('Y-m-d');
      $efectivo = DB::table("pagos")
                    ->where("tipo_deposito", "Efectivo")
                    ->where("fecha", $fecha)
                    ->sum('total');
                    
      return $efectivo;
    }

    public function countTargeta() {
        $fecha = date('Y-m-d');
        $tarjeta = DB::table("pagos")
                     ->where("tipo_deposito", "Tarjeta")
                     ->where("fecha", $fecha)
                     ->sum('total');
                     

        return $tarjeta;
    }

    public function pdfAtencionDoctores() {

    }

    public function pdfGastos() {

    }

    public function pdfCierreCaja() {

    }

    public function pdfLaboratorio() {

    }

    public function FacturaMesAMes($fechainicial, $fechafinal) {
      $fecha1 = date('Y') + $fechainicial;
      $fecha2 = date('Y') + $fechafinal;

      $mesAmes = DB::table('pagos')
                   ->select('SELECT SUM(total) as tarjeta')
                   ->where('fecha','>=', $fecha1)
                   ->where('fecha','<=', $fecha2)
                   ->get();

      return $mesAmes;
    }

    public function getTransacciones() {
      $fecha = date('Y-m-d');
      $transacciones = DB::table('transacciones')
                   ->select('*')
                   ->where('fecha','=', $fecha1)
                   ->get();

      return $transacciones;
    }

    public function contarMesAMes($fechainicial, $fechafinal) {
      $mes = DB::table("pagos")
               ->where("fecha", ">=" , $fechainicial)
               ->where("fecha","<=", $fechafinal)
               ->sum('total');
                     
        return $mes;
    }

}
