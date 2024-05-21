<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Patient extends Model
{
    use HasFactory;

    public function getPatient($documento) {
      $patient = DB::table("pacientes")
                 ->select("*")
                 ->where("docucumento", $documento)
                 ->get()
                 ->first();
        
      return $patient;
    }

    public function createPatient($data) {
      $patients = [
        "hc" => $data["hc"],
        "url_imagen" => $data["url_imagen"],
        "nombre" => $data["nombre"],
        "apellido" => $data["apellido"],
        "documento" => $data["documento"],
        "email" => $data["email"],
        "direccion" => $data["direccion"],
        "telefono" => $data["telefono"],
        "sexo" => $data["sexo"],
        "fecha_nacimiento" => $data["fecha_nacimiento"],
        "edad" => $data["edad"],
        "menor_edad" => $data["menor_edad"],
        "familiar_documento" => $data["familiar_documento"],
        "gruposangunieo" => $data["gruposangunieo"],
        "ocupacion" => $data["ocupacion"],
        "grado_academico" => $data["grado_academico"],
        "estado_civil" => $data["estado_civil"],
        "departamento" => $data["departamento"],
        "provincia" => $data["provincia"],
        "distrito" => $data["distrito"],
        "usuario" => $data["usuario"],
        "estado" => $data["estado"],
        "password" => $data["password"]
      ];
      
      DB::table("pacientes")
      ->insert($patients);    
    }
}
