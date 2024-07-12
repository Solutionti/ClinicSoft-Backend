<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Admission;
use App\Models\Laboratory;
use App\Models\Triage;
use App\Models\Quote;
use Illuminate\Http\Request;

class AdmissionController extends Controller{

  public function __construct(request $request) {
    $this->Patient = new Patient();
    $this->Admission = new Admission();
    $this->Laboratory = new Laboratory();
    $this->Triage = new Triage();
    $this->Quote = new Quote();
  }

  //MODULO DE PACIENTES

  public function getPatients(Request $request) {
    $documento = $request->input("documento");
    return $this->Patient->getPatients($documento);
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

  // HISTORIA CLINICA
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

  public function SubirArchivosPdf() {


  }
  
  public function SubirArchivosImagenes() {
    $dir_subida = 'public/colposcopia/';
    $fichero_subido = $dir_subida.basename($_FILES['imagen1']['name']);

		move_uploaded_file($_FILES['imagen1']['tmp_name'], $fichero_subido);
			$datos = array
      (
			  "id" => $id,
				"icono" => $_FILES['imagen1']['name']
			);
  }

  // MODULO DE ADMISIONES
  public function getAdmission(Request $request) {
    $estado = $request->input("estado");
    return $this->Admission->getAdmission($estado);
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

    // $this->Admission->ValidateAdmision->($documento);
    $this->Admission->createAdmission($admission);

    return response()->json([
      'message' => 'La admision se ha creado en la base de datos',
      'status' => 200
    ]);
  }

  public function getEspecialidadCosto(Request $request) {
    $codigo =  $request->input("especialidad");
    
    return $this->Admission->getEspecialidadCosto($codigo);
  }

  // MODULO DE TRIAGE
  public function getTriageId(Request $request) {
    $paciente = $request->input("paciente");
    return $this->Triage->getTriageId($paciente);
  }
  public function createTriage(Request $request) {
    $presion_arterial = $request->input("presion_arterial");
    $temperatura = $request->input("temperatura");
    $frecuencia_respiratoria = $request->input("frecuencia_respiratoria");
    $frecuencia_cardiaca = $request->input("frecuencia_cardiaca");
    $saturacion = $request->input("saturacion");
    $peso = $request->input("peso");
    $talla = $request->input("talla");
    $imc = $request->input("imc");
    $paciente  = $request->input("paciente");
    $doctor  = $request->input("doctor");
    $especialidad = $request->input("especialidad");
    $estado = $request->input("estado");
    $usuario = $request->input("usuario");

    $triage = [
      "presion_arterial" => $presion_arterial,
      "temperatura" => $temperatura,
      "frecuencia_respiratoria" => $frecuencia_respiratoria,
      "frecuencia_cardiaca" => $frecuencia_cardiaca,
      "saturacion" => $saturacion,
      "peso" => $peso,
      "talla" => $talla,
      "imc" => $imc,
      "paciente" => $paciente,
      "doctor" => $doctor,
      "especialidad" => $especialidad,
      "estado" => $estado,
      "usuario" => $usuario,
    ];
    $this->Triage->createTriage($triage);

    return response()->json([
      'message' => 'El triage se ha registrado en la base de datos',
      'status' => 200
    ]);
  }

  public function PasateStatusAdmission(Request $request) {
    $estado = $request->input("estado");
    $atencion = $request->input("atencion");

    $this->Admission->PasateStatusAdmission($estado, $atencion);

    return response()->json([
      'message' => 'La admision se ha cambiado de estado correctamente',
      'status' => 200
    ]);
  }

  // MODULO DE LABORATORIO
  public function getLaboratoryTable(){
    return $this->Laboratory->getLaboratoryTable();
  }

  public function getQuotePatient(Request $request) {
    $documento = $request->input("documento");

    $quotes = $this->Quote->getQuotePatient($documento);

    return response()->json([
     'data' => $quotes
    ]);
  }

  public function CreateExamenLaboratory(Request $request) {
    $dni_paciente = $request->input("dni_paciente");
    $medico = $request->input("medico");
    $tipo_deposito = $request->input("tipo_deposito");
    $descripcion = $request->input("descripcion");
    $estado = $request->input("estado");
    $fecha = $request->input("fecha");
    $hora = $request->input("hora");
    $total = $request->input("total");
    $usuario = $request->input("usuario");
    $analisis = $request->input("analisis");

    $datos = [
      "documento" => $dni_paciente,
      "medico" => $medico,
      "tipo_deposito" => $tipo_deposito,
      "descripcion" => $descripcion,
      "estado" => $estado,
      "fecha" => date('Y-m-d'),
      "hora" => date('h:i A'),
      "total" => $total,
      "usuario" => $usuario,
    ];

    $id = $this->Laboratory->CreateExamenLaboratory($datos);
    
    foreach($analisis as $laboratorio){
      $detalle = [
        "id_laboratorio" => $id,
        "servicio" => $laboratorio["codigo"],
        "fecha" => date('Y-m-d'),
        "hora" => date('h:i A'),
        "usuario" => $usuario,
      ];
      $this->Laboratory->CreateDetalleLaboratorio($detalle);
    }

    return response()->json([
      'message' => 'La orden de labratorio se ha creado correctamente',
      'status' => 200
    ]);

  }
}
