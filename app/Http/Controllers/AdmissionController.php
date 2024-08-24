<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Admission;
use App\Models\Laboratory;
use App\Models\Triage;
use App\Models\Quote;
use App\Models\History;
use Illuminate\Http\Request;

class AdmissionController extends Controller{

  public function __construct(request $request) {
    $this->Patient = new Patient();
    $this->Admission = new Admission();
    $this->Laboratory = new Laboratory();
    $this->Triage = new Triage();
    $this->Quote = new Quote();
    $this->History = new History();
  }

  //MODULO DE PACIENTES
  public function getPatients(Request $request) {
    $documento = $request->input("documento");
    $apellido = $request->input("apellido");
    return $this->Patient->getPatients($documento, $apellido);
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

    $paciente = $this->Patient->validatePatient($request->input("documento"));

    if(!$paciente->isEmpty()) {
      throw new \Exception('Ya existe un paciente en la base de datos');
    }

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

  public function createHistoriaClinica(Request $request) {

    $tphistoria = $request->input("tphistoria");
    try {

      if($tphistoria == "1") {

        $anamnesis = $request->input("anamnesis");
        $empresa = $request->input("empresa");
        $compania = $request->input("compania");
        $iafa = $request->input("iafa");
        $nombre_acompanante = $request->input("nombre_acompanante");
        $dni = $request->input("dni");
        $celular = $request->input("celular");
        $motivo_consulta = $request->input("motivo_consulta");
        $tratamiento_anterior = $request->input("tratamiento_anterior");
        $enfermedad_actual = $request->input("enfermedad_actual");
        $tiempo = $request->input("tiempo");
        $inicio = $request->input("inicio");
        $curso = $request->input("curso");
        $sintomas = $request->input("sintomas");
        $cabeza = $request->input("cabeza");
        $cuello = $request->input("cuello");
        $ap_respiratoria = $request->input("ap_respiratoria");
        $ap_cardio = $request->input("ap_cardio");
        $abdomen = $request->input("abdomen");
        $ap_genitourinario = $request->input("ap_genitourinario");
        $loco_motor = $request->input("loco_motor");
        $apetito = $request->input("apetito");
        $sed = $request->input("sed");
        $orina = $request->input("orina");
        $sistema_nervioso = $request->input("sistema_nervioso");
        $examen_dx = $request->input("examen_dx");
        $procedimientos = $request->input("procedimientos");
        $interconsultas = $request->input("interconsultas");
        $tratamiento = $request->input("tratamiento");
        $plan_trabajo = $request->input("plan_trabajo");
        $referencia = $request->input("referencia");
        $proxima_cita = $request->input("proxima_cita");
        $firma_medico = $request->input("firma_medico");
        $usuario = $request->input("usuario");

        $data = [
         "anamnesis" => $anamnesis,
         "empresa" => $empresa,
         "compania" => $compania,
         "iafa" => $iafa,
         "nombre_acompanante" => $nombre_acompanante,
         "dni" => $dni,
         "celular" => $celular,
         "motivo_consulta" => $motivo_consulta,
         "tratamiento_anterior" => $tratamiento_anterior,
         "enfermedad_actual" => $enfermedad_actual,
         "tiempo" => $tiempo,
         "inicio" => $inicio,
         "curso" => $curso,
         "sintomas" => $sintomas,
         "cabeza" => $cabeza,
         "cuello" => $cuello,
         "ap_respiratoria" => $ap_respiratoria,
         "ap_cardio" => $ap_cardio,
         "abdomen" => $abdomen,
         "ap_genitourinario" => $ap_genitourinario,
         "loco_motor" => $loco_motor,
         "apetito" => $apetito,
         "sed" => $sed,
         "orina" => $orina,
         "sistema_nervioso" => $sistema_nervioso,
         "examen_dx" => $examen_dx,
         "procedimientos" => $procedimientos,
         "interconsultas" => $interconsultas,
         "tratamiento" => $tratamiento,
         "plan_trabajo" => $plan_trabajo,
         "referencia" => $referencia,
         "proxima_cita" => $proxima_cita,
         "firma_medico" => $firma_medico,
         "usuario" => $usuario,
        ];
        $this->History->createHistoriaGeneral($data);

        return response()->json([
          'message' => 'La historia general se ha creado en la base de datos',
          'status' => 200
        ]);
      }
      else if($tphistoria == "2") {
        $familiares1 = $request->input("familiares11");
        $patologicos1 = $request->input("patologicos1");
        $gineco_obstetrico1 = $request->input("gineco_obstetrico1");
        $fum1 = $request->input("fum1");
        $rm1 = $request->input("rm1");
        $flujo_genital1 = $request->input("flujo_genital1");
        $no_de_parejas1 = $request->input("no_de_parejas1");
        $gestas1 = $request->input("gestas1");
        $partos1 = $request->input("partos1");
        $abortos1 = $request->input("abortos1");
        $anticonceptivos1 = $request->input("anticonceptivos1");
        $tipo1 = $request->input("tipo1");
        $tiempo1 = $request->input("tiempo1");
        $cirugia_ginecologica1 = $request->input("cirugia_ginecologica1");
        $otros1 = $request->input("otros1");
        $fecha_pap1 = $request->input("fecha_pap1");
        $no_hijos1 = $request->input("no_hijos1");
        $motivo_consulta1 = $request->input("motivo_consulta1");
        $signossintomas1 = $request->input("signossintomas1");
        $piel_tscs1 = $request->input("piel_tscs1");
        $tiroides1 = $request->input("tiroides1");
        $mamas1 = $request->input("mamas1");
        $arespiratorio1 = $request->input("arespiratorio1");
        $acardiovascular1 = $request->input("acardiovascular1");
        $abdomen1 = $request->input("abdomen1");
        $genito_urinario1 = $request->input("genito_urinario1");
        $tacto_rectal1 = $request->input("tacto_rectal1");
        $locomotor1 = $request->input("locomotor1");
        $sistema_nervioso1 = $request->input("sistema_nervioso1");
        $examenes_auxiiliares1 = $request->input("examenes_auxiiliares1");
        $plan_trabajo1 = $request->input("plan_trabajo1");
        $tratamiento1 = $request->input("tratamiento1");
        $proxima_cita1 = $request->input("proxima_cita1");
        $firma_medico1 = $request->input("firma_medico1");
        $estado1 = $request->input("estado1");
        $usuario1 = $request->input("usuario1");

        $data = [
           "familiares" => $familiares1,
           "patologicos" => $patologicos1,
           "gineco_obstetrico" => $gineco_obstetrico1,
           "fum" => $fum1,
           "rm" => $rm1,
           "flujo_genital" => $flujo_genital1,
           "no_de_parejas" => $no_de_parejas1,
           "gestas" => $gestas1,
           "partos" => $partos1,
           "abortos" => $abortos1,
           "anticonceptivos" => $anticonceptivos1,
           "tipo" => $tipo1,
           "tiempo" => $tiempo1,
           "cirugia_ginecologica" => $cirugia_ginecologica1,
           "otros" => $otros1,
           "fecha_pap" => $fecha_pap1,
           "no_hijos" => $no_hijos1,
           "motivo_consulta" => $motivo_consulta1,
           "signossintomas" => $signossintomas1,
           "piel_tscs" => $piel_tscs1,
           "tiroides" => $tiroides1,
           "mamas" => $mamas1,
           "arespiratorio" => $arespiratorio1,
           "acardiovascular" => $acardiovascular1,
           "abdomen" => $abdomen1,
           "genito_urinario" => $genito_urinario1,
           "tacto_rectal" => $tacto_rectal1,
           "locomotor" => $locomotor1,
           "sistema_nervioso" => $sistema_nervioso1,
           "examenes_auxiiliares" => $examenes_auxiiliares1,
           "plan_trabajo" => $plan_trabajo1,
           "tratamiento" => $tratamiento1,
           "proxima_cita" => $proxima_cita1,
           "firma_medico" => $firma_medico1,
           "estado" => $estado1,
           "usuario" => $usuario1,
        ];

        $this->History->createHistoriaGinecologica($data);
        return response()->json([
          'message' => 'La historia ginecologica se ha creado en la base de datos',
          'status' => 200
        ]);
      }
    }
    catch(\exception $e) {
      return response()->json([
        'status' => 400,
        'message' => $e->getMessage()
      ]);
    }
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

    if($cola_atencion == "Si") {
      $orden__ =  $this->Admission->countAdmisionDoctor($medico) + 1;
    }
    else {
      $orden__ = 1;
    }

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

    $validation = $this->Admission->ValidateAdmision($documento);
    
    try {

      if(!$validation->isEmpty()) {
        throw new \Exception('Ya existe una admision abierta para el paciente');
      }

      $this->Admission->createAdmission($admission);

      return response()->json([
        'message' => 'La admisión se ha creado en la base de datos',
        'status' => 200
      ]);
    }
    catch(\Exception $e) {
      return response()->json(['status' => 400,'message' => $e->getMessage()]);
    }
    
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
      'status' => 200,
      'codigo' => $id
    ]);

  }

  public function getFarmaciaMedicamentos() {
    return $this->Admission->getFarmaciaMedicamentos();
  }
}
