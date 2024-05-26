<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class admission extends Model
{
    use HasFactory;

    public function getAdmission() {
      $admissions = DB::table("admisiones")
                    ->select("*")
                    ->get();

      return $admissions;
    }

    public function getAdmissionId($documento) {
        $admissions = DB::table("admisiones")
                      ->select("*")
                      ->where("documento", $documento)
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
        "turno" => $data["turno"],
        "usuario" => $data["usuario"],
        "orden__" => $data["orden__"],
      ];

      DB::table("admisiones")
        ->insert($admissions);
    }


}
