<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller{

  public function __construct(request $request) {
    $this->Patient = new Patient();
    $this->Admission = new Admission();
  }

  //MODULO DE PACIENTES

  public function getPatients() {
    return $this->Patient->getPatients();
  }

  public function getPatientId(Request $request) {
    $documento = $request->input("documento");

    try {
      $patient = $this->Patient->getPatientId($documento);

      if($patient == "") {
        throw new \Exception("El paciente no existe en la base de datos");
      }

      return response()->json([
        'data' => $patient,
        'status' => 200
      ]);
    }
      catch(\exception $e) {
        return response()->json([
          'status' => 400,
          'message' => $e->getMessage()
        ]);
    }
  }

  public function createPatient(Request $request) {
  
  try{
    $patients = [
      "hc" => $request->input("hc"),
      "url_imagen" => "",
      "nombre" => $request->input("nombre"),
      "apellido" => $request->input("apellido"),
      "documento" => $request->input("documento"),
      "email" => $request->input("email"),
      "direccion" => $request->input("direccion"),
      "telefono" => $request->input("telefono"),
      "sexo" => $request->input("sexo"),
      "fecha_nacimiento" => $request->input("fecha_nacimiento"),
      "edad" => $request->input("edad"),
      "menor_edad" => $request->input("menor_edad"),
      "familiar_documento" => $request->input("familiar_documento"),
      "gruposangunieo" => $request->input("gruposangunieo"),
      "ocupacion" => $request->input("ocupacion"),
      "grado_academico" => $request->input("grado_academico"),
      "estado_civil" => $request->input("estado_civil"),
      "departamento" => $request->input("departamento"),
      "provincia" => $request->input("provincia"),
      "distrito" => $request->input("distrito"),
      "usuario" => $request->input("usuario"),
      "estado" => "Activo",
      "password" => ""
    ];
    $this->Patient->createPatient($patients);

    return response()->json([
      'message' => 'El paciente se ha creado en la base de datos',
      'status' => 200
    ]);
  }
  catch(\exception $e){
    return response()->json([
      'status' => 400,
      'message' => $e->getMessage()
    ]);
  }

  }

  public function updatePatient(Request $request){
  try {

    $patients = [
      "url_imagen" => "",
      "nombre" => $request->input("nombre"),
      "apellido" => $request->input("apellido"),
      "email" => $request->input("email"),
      "direccion" => $request->input("direccion"),
      "telefono" => $request->input("telefono"),
      "sexo" => $request->input("sexo"),
      "fecha_nacimiento" => $request->input("fecha_nacimiento"),
      "edad" => $request->input("edad"),
      "menor_edad" => $request->input("menor_edad"),
      "familiar_documento" => $request->input("familiar_documento"),
      "gruposangunieo" => $request->input("gruposangunieo"),
      "ocupacion" => $request->input("ocupacion"),
      "grado_academico" => $request->input("grado_academico"),
      "estado_civil" => $request->input("estado_civil"),
      "departamento" => $request->input("departamento"),
      "provincia" => $request->input("provincia"),
      "distrito" => $request->input("distrito"),
      "usuario" => $request->input("usuario"),
      "estado" => "Activo",
      "password" => ""
    ];
    
    $this->Patient->updatePatient($patients, $request->input("documento"));

    return response()->json([
      'message' => 'El paciente se ha actualizado en la base de datos',
      'status' => 200
    ]);
  }
    catch(\exception $e) {
      return response()->json([
        'status' => 400,
        'message' => $e->getMessage()
      ]);
    }
  }

  public function getClinicHistory(Request $request) {
    $documento = $request->input("documento");
    //DATOS DEL PACIENTE
    //ULTIMO TRIAGE REALIZADO
    // ARCHIVOS DE PACIENTE
    //ALERGIAS DEL PACIENTE
    // ANTECEDENTES
    // ANTECEDENTES GINECO- OBSTETRICOS
    // VACUNACION
    //MEDICAMENTOS
    // CITAS 
    // HISTORIAL DE CONSULTAS ULTIMAS 2
  }

  // MODULO DE ADMISIONES
  public function getAdmission() {
    return $this->Admission->getAdmission();
  }

  public function createAdmission(Request $request) {
    $documento = $request->input("documento");
    $medico = $request->input("medico");
    $especialidad = $request->input("especialidad");
    $cola_atencion = $request->input("cola_atencion");
    $costo = $request->input("costo");
    $comision = $request->input("comision");
    $turno = $request->input("turno");
    $usuario = $request->input("usuario");
    $orden__ = $request->input("orden__");

    $admission = [
      "documento" => $documento,
      "medico" => $medico,
      "especialidad" => $especialidad,
      "cola_atencion" => $cola_atencion,
      "costo" => $costo,
      "comision" => $comision,
      "estado" => "Registrado",
      "turno" => $turno,
      "usuario" => $usuario,
      "orden__" => $orden__,
    ];
    $this->Admission->createAdmission($admission);

    return response()->json([
      'message' => 'La admision se ha creado en la base de datos',
      'status' => 200
    ]);

  }

  // MODULO DE TRIAGE
  public function getTriage() {
    
  }
  public function createTriage() {
    
  }

  // MODULO DE LABORATORIO
  public function getLaboratoryTable(){

  }

  public function CreateExamenLaboratory() {

  }
}
