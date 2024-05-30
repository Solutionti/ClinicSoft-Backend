<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class admission extends Model
{
    use HasFactory;

    public function getAdmission($estado) {
      $admissions = DB::table("atenciones")
                    ->select("*")
                    ->where("estado", $estado)
                    ->get();

      return $admissions;
    }

    public function createAdmission($data) {
      $admissions = [
        "paciente" => $data["documento"],
        "medico" => $data["medico"],
        "especialidad" => $data["especialidad"],
        "cola_atencion" => $data["cola_atencion"],
        "comision" => $data["comision"],
        "costo" => $data["costo"],
        "estado" => $data["estado"],
        "turno" => $data["turno"],
        "usuario" => $data["usuario"],
        "orden__" => $data["orden__"],
      ];

      DB::table("admisiones")
        ->insert($admissions);
    }

    public function getEspecialidadCosto($codigo) {
      $especiality = DB::table("especialidades")
                      ->select('comision_aproximada', 'costo')
                      ->where("codigo_especialidad", $codigo)
                      ->get()
                      ->first();

      return $especiality;
    }


}
