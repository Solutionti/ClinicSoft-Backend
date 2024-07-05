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
        $doctores = DB::table("doctores")->count();

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
      $efectivo = DB::table("pagos")
                    ->select("SELECT SUM(total) as efectivo")
                    ->where("tipo_deposito", "Efectivo")
                    ->get();

      return $efectivo;
    }

    public function countTargeta() {
        $tarjeta = DB::table("pagos")
                     ->select("SELECT SUM(total) as tarjeta")
                     ->where("tipo_deposito", "Tarjeta")
                     ->get();

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

}
