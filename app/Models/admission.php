<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class admission extends Model
{
    use HasFactory;

    public function getAdmission($estado) {
      $admissions = DB::table("admisiones")
                    ->select('admisiones.*',DB::raw("CONCAT(users.nombre, ' ', users.apellido) as medicos"), 'especialidades.descripcion as especialidades', 'pacientes.nombre', 'pacientes.apellido')
                    ->join('pacientes', 'admisiones.paciente', '=', 'pacientes.documento')
                    ->join('users', 'admisiones.medico', '=', 'users.id')
                    ->join('especialidades', 'admisiones.especialidad', '=', 'especialidades.codigo_especialidad')
                    ->where("admisiones.estado", $estado)
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
        "fecha" => date("Y-m-d"),
        "hora" => date("h:i"),
        "estado" => $data["estado"],
        "turno" => $data["turno"],
        "usuario" => $data["usuario"],
        "orden__" => $data["orden__"],
      ];

      $id = DB::table("admisiones")
        ->insertGetId($admissions);

      return $id;
    }

    public function countAdmisionDoctor($medico) {
      $fecha = date("Y-m-d");
      $cantidadDoctor = DB::table("admisiones")
                          ->where("medico", $medico)
                          ->where("cola_atencion", "Si")
                          ->where("fecha", $fecha)
                          ->count();

      return $cantidadDoctor;
    }

    public function ValidateAdmision($documento) {
      $admission = DB::table("admisiones")
                      ->where("paciente", $documento)
                      ->where("estado", "Registrado")
                      ->get();

      return $admission;

    }

    public function getEspecialidadCosto($codigo) {
      $especiality = DB::table("especialidades")
                      ->select('comision_aproximada', 'costo')
                      ->where("codigo_especialidad", $codigo)
                      ->get()
                      ->first();

      return $especiality;
    }

    public function PasateStatusAdmission($estado, $atencion) {
      $admission = [
        "estado" => $estado
      ];
      DB::table("admisiones")
          ->where("codigo_atencion", $atencion)
          ->update($admission);
    }

    public function getFarmaciaMedicamentos() {

      $medicamentos = DB::Connection('farmacia')
                      ->table("ecografia_mama")
                      ->select("*")
                      ->get();

      return $medicamentos;
      
    }

    public function getCitas($doctor) {
      $citas = DB::table("citas")
                  ->select("citas.nombre as title", "citas.fecha as start", "users.color as color" ,"citas.comentarios as description")
                  ->join("users", "citas.doctor", "users.id")
                  ->where(function ($query) use ($doctor) {
                    if($doctor != 0){
                      $query->where('doctor', $doctor);
                    }
                  })
                  ->get();
                  
      return $citas;
    }

    public function UpdatePagosCancelada($atencion) {
      $pago = [ 
        "estado" => "Cancelada"
      ];
      
      DB::table("pagos")
         ->where("atencion", $atencion)
         ->update($pago);
    }


}
