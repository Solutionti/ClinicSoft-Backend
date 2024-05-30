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
                    ->select('atenciones.*', 'doctores.nombre as medicos', 'especialidades.descripcion as especialidades', 'pacientes.nombre', 'pacientes.apellido')
                    ->join('pacientes', 'atenciones.paciente', '=', 'pacientes.documento')
                    ->join('doctores', 'atenciones.medico', '=', 'doctores.codigo_doctor')
                    ->join('especialidades', 'atenciones.especialidad', '=', 'especialidades.codigo_especialidad')
                    ->where("atenciones.estado", $estado)
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
