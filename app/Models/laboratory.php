<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class laboratory extends Model
{
    use HasFactory;

    public function getLaboratoryTable(){
        $laboratories = DB::table("precio_laboratorio")
        ->select("*")
        ->get();

        return $laboratories;
    }

    public function CreateLaboratory() {
      $laboratory = [
        "nombre"  => $nombre,
        "precio"  => $precio,
        "estado"  => $estado,
        "usuario" => $usuario,
      ];

      DB::table("precio_laboratorio")
        ->updateOrInsert(
          [
            "codigo" => $data["codigo"],
          ],
          $laboratory
        );
    }

    public function CreateEspeciality() {
      $especiality = [
        "comision_aproximada"  => $comision_aproximada,
        "estado"  => $estado,
        "descripcion"  => $descripcion,
        "costo" => $costo,
        "usuario" => $usuario,
      ];

      DB::table("especialidades")
        ->updateOrInsert(
          [
            "codigo" => $data["codigo"],
          ],
          $especiality
        );
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
