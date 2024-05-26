<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class laboratory extends Model
{
    use HasFactory;

    public function getLaboratoryTable(){
        $laboratories = DB::table("precio_laboratorios")
        ->select("*")
        ->get();

        return $laboratories;
    }

    public function CreateExamenLaboratory() {
      $laboratories = [
        "paciente" => $data["documento"],
        "medico" => $data["medico"],
        "tipo_deposito" => $data["tipo_deposito"],
        "descripcion" => $data["descripcion"],
        "estado" => $data["estado"],
        "fecha" => $data["fecha"],
        "hora" => $data["hora"],
        "total" => $data["total"],
        "usuario" => $data["usuario"],
      ];

      DB::table("laboratorios")
        ->insert($laboratories);
    }
}
