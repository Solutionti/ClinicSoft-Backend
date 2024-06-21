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
      $payments = DB::table("pagos")
                    ->join('pacientes', 'pagos.dni_paciente', '=', 'pacientes.documento')
                    ->join('doctores', 'pagos.medico', '=', 'doctores.codigo_doctor')
                    ->select('pagos.*', 'pacientes.nombre', 'pacientes.apellido', 'doctores.nombre as medico')
                    ->get();

      return  $payments;
    }
}
