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

    public function pdfFacturaLaboratorio($codigo, $paciente) {
        $laboratorio = DB::table("laboratorio")
        ->select("laboratorio.*", "doctores.nombre as doctor", "pacientes.nombre", "pacientes.apellido", "pacientes.password")
        ->join("pacientes", "laboratorio.dni_paciente", "pacientes.documento")
        ->join("doctores", "laboratorio.medico", "doctores.codigo_doctor")
        ->where("laboratorio.codigo_laboratorio", $codigo)
        ->where("laboratorio.dni_paciente", $paciente)
        ->get();

        return $laboratorio;
    }

    public function getDetalleLaboratorio($idlaboratorio) {
      $detalleLaboratorio = DB::table("detalle_pago_laboratorio")
                            ->select("*")
                            ->where("id_laboratorio", $idlaboratorio)
                            ->get();

      return $detalleLaboratorio;
    }

    public function pdfColposcopia($codigo) {
        $colposcopias = DB::table("colposcopias")
        ->select("colposcopias.*", "pacientes.*")
        ->join("pacientes", "colposcopias.paciente", "pacientes.documento")
        ->where("colposcopias.codigo_colposcopia", $codigo)
        ->get();

        return $colposcopias;
    }

    public function pdfKardex($producto, $fechainicial, $fechafinal) {
        $kardex = DB::table("kardex")
        ->select("*")
        ->where("id_producto", $producto)
        ->where("fecha", ">=" ,$fechainicial)
        ->where("fecha", "<=", $fechafinal)
        ->get();

        return $kardex;
    }

    public function pdfInventario($codigo) {
        $inventario = DB::table("productos")
        ->select("*")
        ->where("codigo", $codigo)
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
