<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class triage extends Model
{
    use HasFactory;

    public function getTriage() {
      $triages = DB::table("triages")
                 ->select("*")
                 ->get();

      return $triages;
    }

    public function createTriage($data) {
      $triages = [
        "presion_arterial" => $data["presion_arterial"],
        "temperatura" => $data["temperatura"],
        "frecuencia_respiratoria" => $data["frecuencia_respiratoria"],
        "frecuencia_cardiaca" => $data["frecuencia_cardiaca"],
        "saturacion" => $data["saturacion"],
        "peso" => $data["peso"],
        "talla" => $data["talla"],
        "imc" => $data["imc"],
        "paciente" => $data["paciente"],
        "doctor" => $data["doctor"],
        "especialidad" => $data["especialidad"],
        "estado" => $data["estado"],
        "usuario" => $data["usuario"],
      ];

      DB::table("triajes")
         ->updateOrInsert(
          [
            "paciente" => $data["paciente"],
          ],
          $triages
         );
    }
}
