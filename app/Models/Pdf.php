<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pdf extends Model
{
    use HasFactory;

    public function getEmpresa($empresa){
        $empresa = DB::table("empresas")
        ->select("*")
        ->where("empresa", $empresa)
        ->get();

        return $empresa; 
    }

    public function pdfHistoriaClinica() {
       
    }

    public function pdfFacturaAdmision($admision) {
      $admision = DB::table("admisiones")
                    ->select("admisiones.*", "doctores.nombre as doctor", "especialidades.descripcion", "pacientes.nombre", "pacientes.apellido")
                    ->join("doctores", 'admisiones.medico','doctores.codigo_doctor')
                    ->join("pacientes", 'admisiones.paciente','pacientes.documento')
                    ->join('especialidades', 'admisiones.especialidad','especialidades.codigo_especialidad')
                    ->where("codigo_atencion", $admision)
                    ->get();

      return $admision;
    }

    public function pdfFacturaLaboratorio() {
        $laboratorio = DB::table("")
        ->select("")
        ->where("")
        ->get();

        return $laboratorio;
    }

    public function pdfColposcopia() {
        $colposcopias = DB::table("")
        ->select("")
        ->where("")
        ->get();

        return $colposcopias;
    }

    public function pdfKardex() {
        $kardex = DB::table("")
        ->select("")
        ->where("")
        ->get();

        return $kardex;
    }

    public function pdfInventario() {
        $inventario = DB::table("")
        ->select("")
        ->where("")
        ->get();

        return $inventario;
    }

    public function pdfCaja() {
        $caja = DB::table("")
        ->select("")
        ->where("")
        ->get();

        return $caja;
    }

    public function pdfGastos() {
        $gastos = DB::table("")
        ->select("")
        ->where("")
        ->get();

        return $gastos;
    }

    public function pdfLaboratorio() {
        $laboratorio = DB::table("")
        ->select("")
        ->where("")
        ->get();

        return $laboratorio;
    }

    public function pdfPagos() {
        $pagos = DB::table("")
        ->select("")
        ->where("")
        ->get();

        return $pagos;
    }
}
