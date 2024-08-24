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

    public function pdfFacturaLaboratorio($codigo) {
        $laboratorio = DB::table("laboratorio")
        ->select("laboratorio.*", "doctores.nombre as doctor", "pacientes.nombre", "pacientes.apellido", "pacientes.password")
        ->join("pacientes", "laboratorio.dni_paciente", "pacientes.documento")
        ->join("doctores", "laboratorio.medico", "doctores.codigo_doctor")
        ->where("laboratorio.codigo_laboratorio", $codigo)
        ->get();

        return $laboratorio;
    }

    public function detalleLaboratorioPdf($codigo) {
        $laboratoriodetalle = DB::table("detalle_pago_laboratorio")
                                ->select("detalle_pago_laboratorio.*", "precio_laboratorio.nombre", "precio_laboratorio.precio")
                                ->join("precio_laboratorio", "detalle_pago_laboratorio.servicio", "precio_laboratorio.codigo")
                                ->where("id_laboratorio", $codigo)
                                ->get();

        return $laboratoriodetalle;
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

    public function pdfInventario($cantidad, $valor) {
        $inventario = DB::table("productos")
        ->select("productos.*", 'categorias.nombre as categoria')
        ->join('categorias', 'productos.categoria', '=', 'categorias.codigo_categoria')
        ->where('stock',$valor, $cantidad)
        ->get();

        return $inventario;
    }

    public function pdfCaja($doctor, $fechainicial, $fechafinal) {
        $caja = DB::table("pagos")
        ->select("pagos.*", "pacientes.nombre", "pacientes.apellido", "doctores.nombre as doctor", "especialidades.descripcion")
        ->join("pacientes", "pagos.dni_paciente", "pacientes.documento")
        ->join("doctores", "pagos.medico", "doctores.codigo_doctor")
        ->join("especialidades", "pagos.especialidad", "especialidades.codigo_especialidad")
        ->where(function ($query) use ($doctor) {
            if($doctor != null){
              $query->where('pagos.medico', $doctor);
            }
          })
        ->where("pagos.fecha",">=", $fechainicial)
        ->where("pagos.fecha","<=", $fechafinal)
        ->get();

        return $caja;
    }

    public function pdfGastos($fechainicial, $fechafinal) {
        $gastos = DB::table("cpe_gastos")
        ->select("*")
        ->where("f_recepcion",">=", $fechainicial)
        ->where("f_recepcion","<=", $fechafinal)
        ->get();

        return $gastos;
    }

    public function pdfLaboratorio($fechainicial, $fechafinal) {
        $laboratorio = DB::table("detalle_pago_laboratorio")
        ->select("laboratorio.dni_paciente","laboratorio.estado","laboratorio.total","laboratorio.tipo_deposito", "detalle_pago_laboratorio.*", "pacientes.nombre", "pacientes.apellido", "precio_laboratorio.nombre as descripcion")
        ->join("laboratorio", "detalle_pago_laboratorio.id_laboratorio", "laboratorio.codigo_laboratorio")
        ->join("pacientes", "laboratorio.dni_paciente", "pacientes.documento")
        ->join("precio_laboratorio", "detalle_pago_laboratorio.servicio", "precio_laboratorio.codigo")
        ->where("detalle_pago_laboratorio.fecha", ">=" , $fechainicial)
        ->where("detalle_pago_laboratorio.fecha", "<=", $fechafinal)
        ->get();

        return $laboratorio;
    }

    public function pdfPagos() {
        $pagos = DB::table("pagos")
        ->select("pagos.*", "pacientes.nombre", "pacientes.apellido", "doctores.nombre as doctor", "especialidades.descripcion as especialidad")
        ->join("pacientes", "pagos.dni_paciente", "pacientes.documento")
        ->join("doctores", "pagos.medico", "doctores.codigo_doctor")
        ->join("especialidades", "pagos.especialidad", "especialidades.codigo_especialidad")
        ->where("pagos.fecha", date("Y-m-d"))
        ->get();

        return $pagos;
    }
}
