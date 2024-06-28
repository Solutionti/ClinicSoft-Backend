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

    public function CreateLaboratory($data) {
      $laboratory = [
        "nombre"  => $data['nombre'],
        "precio"  => $data['precio'],
        "estado"  => $data['estado'],
        "usuario" => $data['usuario'],
      ];

      DB::table("precio_laboratorio")
        ->insert($laboratory);
    }

    public function CreateEspeciality($data) {
      $especiality = [
        "comision_aproximada"  => $data['comision_aproximada'],
        "estado"  => $data['estado'],
        "descripcion"  => $data['descripcion'],
        "costo" => $data['costo'],
        "usuario" => $data['usuario'],
      ];

      DB::table("especialidades")
        ->insert($especiality);
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
