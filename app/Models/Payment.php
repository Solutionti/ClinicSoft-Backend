<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class Payment extends Model
{
    use HasFactory;

    public function getPayments() {
      $fecha = date("Y-m-d");
      $payments = DB::table("pagos")
                    ->join('pacientes', 'pagos.dni_paciente', '=', 'pacientes.documento')
                    ->join('doctores', 'pagos.medico', '=', 'doctores.codigo_doctor')
                    ->select('pagos.*', 'pacientes.nombre', 'pacientes.apellido', 'doctores.nombre as medico')
                    ->where('pagos.fecha', $fecha)
                    ->get();

      return  $payments;
    }

    public function createPayment($datos) {
      $payment = [
        "dni_paciente" => $datos["dni_paciente"],
        "medico" => $datos["medico"],
        "especialidad" => $datos["especialidad"],
        "atencion" => $datos["atencion"],
        "fecha" => $datos["fecha"],
        "hora" => $datos["hora"],
        "descuento" => $datos["descuento"],
        "comision" => $datos["comision"],
        "descripcion" => $datos["descripcion"],
        "total" => $datos["total"],
        "cantidad_recibida" => $datos["cantidad_recibida"],
        "tipo_deposito" => $datos["tipo_deposito"],
        "estado" => $datos["estado"],
        "usuario" => $datos["usuario"],
      ];
      DB::table("pagos")
      ->insert($payment);
    }
}
