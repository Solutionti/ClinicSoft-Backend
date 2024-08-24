<?php

namespace App\Http\Controllers;

//o importamos o llamamos el modelo
use App\Models\Ecografia;

use Illuminate\Http\Request;

class EcografiasController extends Controller {

    public function __construct() {
      $this->Ecografia = new Ecografia();
    }

    public function crearEcografiaGenetica(Request $request ) {
      //definir la variable y acceder al campo de la peticion
      //$dni = $request->input("dni");
      //$dni = $request->dni;
      //acceder a todas los datos que vienen por la peticion
      //print_r($request->all());
//   if(!$paciente->isEmpty()) {
    //     throw new \Exception('Ya existe un paciente en la base de datos');
    //   }
    try {
        $documento_paciente = $request->documento_paciente;
        $codigo_doctor = $request->codigo_doctor;
        $posicion_feto = $request->posicion_feto;
        $situacion_feto = $request->situacion_feto;
        $liquido_amniotico = $request->liquido_amniotico;
        $placenta = $request->placenta;
        $lcr = $request->lcr;
        $lcf = $request->lcf;
        $art_uteder = $request->art_uteder;
        $art_uteizq = $request->art_uteizq;
        $ip_promedio = $request->ip_promedio;
        $translucencia_nucal = $request->translucencia_nucal;
        $ductud_venosa = $request->ductud_venosa;
        $conclusion = $request->conclusion;
        $sugerencia = $request->sugerencia;
        $fecha = date("Y-d-m");
        $hora = date("H:i");
        $usuario = $request->usuario;

        //definicion del array
        $ecografia = [
          "ddocumento_pacienteni" => $documento_paciente,
          "codigo_doctor" => $codigo_doctor,
          "posicion_feto" => $posicion_feto,
          "situacion_feto" => $situacion_feto,
          "liquido_amniotico" => $liquido_amniotico,
          "placenta" => $placenta,
          "lcr" => $lcr,
          "lcf" => $lcf,
          "art_uteder" => $art_uteder,
          "art_uteizq" => $art_uteizq,
          "ip_promedio" => $ip_promedio,
          "translucencia_nucal" => $translucencia_nucal,
          "ductud_venosa" => $ductud_venosa,
          "conclusion" => $conclusion,
          "sugerencia" => $sugerencia,
          "fecha" => $fecha,
          "hora" => $hora,
          "usuario" => $usuario,
        ];

        // salida
        $this->Ecografia->crearEcografiaGenetica($ecografia);

        return response()->json([
            'message' => 'La ecografia genetica se ha creado en la base de datos',
            'status' => 200
          ]);
    }
     //parte seguridad
      catch(\exception $e) {
        return response()->json([
          'status' => 400,
          'message' => $e->getMessage()
        ]);
      }
    }


    public function crearEcografiaMama(Request $request){
        try{
            $documento_paciente = $request->documento_paciente;
            $codigo_doctor = $request->codigo_doctor;
            $pezon_izq = $request->pezon_izq;
            $tcsc_izq = $request->tcsc_izq;
            $tejido_glandular_izq = $request->tejido_glandular_izq;
            $axila_izq = $request->axila_izq;
            $comentario_mama_izq = $request->comentario_mama_izq;
            $pezon_der = $request->pezon_der;
            $tcsc_der = $request->tcsc_der;
            $tejido_glandular_der = $request->tejido_glandular_der;
            $axila_der = $request->axila_der;
            $comentario_der = $request->comentario_der;
            $conclusion_mama = $request->conclusion_mama;
            $sugerencias_mama = $request->sugerencias_mama;
            $fecha = date("Y-m-d");
            $hora = date("H:i");
            $usuario = $request->usuario;

            $ecografia =[
              "codigo_doctor" => $codigo_doctor,
              "pezon_izq" => $pezon_izq,
              "tcsc_izq" => $tcsc_izq,
              "tejido_glandular_izq" => $tejido_glandular_izq,
              "axila_izq" => $axila_izq,
              "comentario_mama_izq" => $comentario_mama_izq,
              "pezon_der" => $pezon_der,
              "tcsc_der" => $tcsc_der,
              "tejido_glandular_der" => $tejido_glandular_der,
              "axila_der" => $axila_der,
              "comentario_der" => $comentario_der,
              "conclusion_mama" => $conclusion_mama,
              "sugerencias_mama" => $sugerencias_mama,
              "fecha" => $fecha,
              "hora" => $hora,
              "usuario" => $usuario,
            ];

            $this->ecografia->crearEcografiaMama($ecografia);
            return response()->json([
                'message' => 'La ecografia de mama se ha creado en la base de datos',
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


    public function crearEcografiaMorfologica(Request $request){
        try{
            $documento_paciente = $request->documento_paciente;
            $codigo_doctor = $request->codigo_doctor;
            $sexo_feto = $request->sexo_feto;
            $situacion = $request->situacion;
            $forma_cabeza = $request->forma_cabeza;
            $cerebelo = $request->cerebelo;
            $cisterna_magna = $request->cisterna_magna;
            $atrio_ventricular = $request->atrio_ventricular;
            $perfil_cara = $request->perfil_cara;
            $cuello = $request->cuello;
            $torax = $request->torax;
            $corazon = $request->corazon;
            $columna = $request->columna;
            $abdomen = $request->abdomen;
            $dbp = $request->dbp;
            $cc = $request->cc;
            $ca = $request->ca;
            $lf = $request->lf;
            $comentario_fetal = $request->comentario_fetal;
            $ip_der = $request->ip_der;
            $ip_izq = $request->ip_izq;
            $ponderado_fetal = $request->ponderado_fetal;
            $lcf_fetal = $request->lcf_fetal;
            $conclusiones = $request->conclusiones;
            $fecha = date('Y-m-d');
            $hora = date('H:i');
            $usuario = $request->usuario;


        $ecografia = [
            "documento_paciente" => $documento_paciente,
            "codigo_doctor" => $codigo_doctor,
            "sexo_feto" => $sexo_feto,
            "situacion" => $situacion,
            "forma_cabeza" => $forma_cabeza,
            "cerebelo" => $cerebelo,
            "cisterna_magna" => $cisterna_magna,
            "atrio_ventricular" => $atrio_ventricular,
            "perfil_cara" => $perfil_cara,
            "cuello" => $cuello,
            "torax" => $torax,
            "corazon" => $corazon,
            "columna" => $columna,
            "abdomen" => $abdomen,
            "dbp" => $dbp,
            "cc" => $cc,
            "ca" => $ca,
            "lf" => $lf,
            "comentario_fetal" => $comentario_fetal,
            "ip_der" => $ip_der,
            "ip_izq" => $ip_izq,
            "ponderado_fetal" => $ponderado_fetal,
            "lcf_fetal" => $lcf_fetal,
            "conclusiones" => $conclusiones,
            "fecha" => $fecha,
            "hora" => $hora,
            "usuario" => $usuario,
        ];

        $this->$ecografia->crearEcografiaMorfologica($ecografia);
        return response()->json([
            'message' => 'La ecografia morfologica se ha creado en la base de datos',
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


    public function crearEcografiaObstetrica(Request $request){
        try{
            $documento_paciente = $request->documento_paciente;
            $codigo_doctor = $request->codigo_doctor;
            $feto_embrion = $request->feto_embrion;
            $situacion_feto = $request->situacion_feto;
            $estado_feto = $request->estado_feto;
            $placenta = $request->placenta;
            $dpb = $request->dpb;
            $lcf = $request->lcf;
            $min = $request->min;
            $cc = $request->cc;
            $ca = $request->ca;
            $lf = $request->lf;
            $ila = $request->ila;
            $percentil = $request->percentil;
            $tipo_parto = $request->tipo_parto;
            $conclusion = $request->conclusion;
            $sugerencia = $request->sugerencia;
            $fecha = date('Y-m-d');
            $hora = date('H:i');
            $usuario = $request->usuario;

        $ecografia = [

            "documento_paciente" => $documento_paciente,
            "codigo_doctor" => $codigo_doctor,
            "feto_embrion" => $feto_embrion,
            "situacion_feto" => $situacion_feto,
            "estado_feto" => $estado_feto,
            "placenta" => $placenta,
            "dpb" => $dpb,
            "lcf" => $lcf,
            "min" => $min,
            "cc" => $cc,
            "ca" => $ca,
            "lf" => $lf,
            "ila" => $ila,
            "percentil" => $percentil,
            "tipo_parto" => $tipo_parto,
            "conclusion" => $conclusion,
            "sugerencia" => $sugerencia,
            "fecha" => $fecha,
            "hora>" => $hora,
            "usuario" => $usuario,
        ];

        $this->$ecografia->crearEcografiaObstetrica($ecografia);
        return response()->json([
            'message' => 'La ecografia obstetrica se ha creado en la base de datos',
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


    public function crearEcografiaPelvica(Request $request){
        try{
            $documento_paciente = $request->documento_paciente;
            $codigo_doctor = $request->codigo_doctor;
            $utero_tipo = $request->utero_tipo;
            $superficie_tipo = $request->superficie_tipo;
            $endometrio = $request->endometrio;
            $tumor_anexial = $request->tumor_anexial;
            $utero_dimensiones = $request->utero_dimensiones;
            $utero_longitud = $request->utero_longitud;
            $utero_tranverso = $request->utero_tranverso;
            $utero_antpost = $request->utero_antpost;
            $comentario_utero = $request->comentario_utero;
            $ovarizq_dimensiones = $request->ovarizq_dimensiones;
            $ovarizq_longitud = $request->ovarizq_longitud;
            $ovarizq_tranverso = $request->ovarizq_tranverso;
            $comentario_ovarizq = $request->comentario_ovarizq;
            $ovarder_dimensiones = $request->ovarder_dimensiones;
            $ovarder_longitud = $request->ovarder_longitud;
            $ovarder_tranverso = $request->ovarder_tranverso;
            $comentario_ovarder = $request->comentario_ovarder;
            $fondo_saco = $request->fondo_saco;
            $miometrio = $request->miometrio;
            $conclusion = $request->conclusion;
            $sugerencias = $request->sugerencias;
            $fecha = date('Y-m-d');
            $hora = date('H:i');
            $usuario = $request->usuario;

            $ecografia = [
                "documento_paciente" => $documento_paciente,
                "codigo_doctor" => $codigo_doctor,
                "utero_tipo" => $utero_tipo,
                "superficie_tipo" => $superficie_tipo,
                "endometrio" => $endometrio,
                "tumor_anexial" => $tumor_anexial,
                "utero_dimensiones" => $utero_dimensiones,
                "utero_longitud" => $utero_longitud,
                "utero_tranverso" => $utero_tranverso,
                "utero_antpost" => $utero_antpost,
                "comentario_utero" => $comentario_utero,
                "ovarizq_dimensiones" => $ovarizq_dimensiones,
                "ovarizq_longitud" => $ovarizq_longitud,
                "ovarizq_tranverso" => $ovarizq_tranverso,
                "comentario_ovarizq" => $comentario_ovarizq,
                "ovarder_dimensiones" => $ovarder_dimensiones,
                "ovarder_longitud" => $ovarder_longitud,
                "ovarder_tranverso" => $ovarder_tranverso,
                "comentario_ovarder" => $comentario_ovarder,
                "fondo_saco" => $fondo_saco,
                "miometrio" => $miometrio,
                "conclusion" => $conclusion,
                "sugerencias" => $sugerencias,
                "fecha" => $fecha,
                "hora" => $hora,
                "usuario" => $usuario,
            ];

            $this->$ecografia->crearEcografiaPelvica($ecografia);
            return response()->json([
                'message' => 'La ecografia pelvica se ha creado en la base de datos',
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


    public function crearEcografiaTransvaginal(Request $request){

        try{
            $documento_paciente = $request->documento_paciente;
            $codigo_doctor = $request->codigo_doctor;
            $utero_tipo = $request->utero_tipo;
            $superficie_tipo = $request->superficie_tipo;
            $endometrio = $request->endometrio;
            $tumor_anexial = $request->tumor_anexial;
            $utero_dimensiones = $request->utero_dimensiones;
            $utero_longitud = $request->utero_longitud;
            $utero_tranverso = $request->utero_tranverso;
            $utero_antpost = $request->utero_antpost;
            $comentario_utero = $request->comentario_utero;
            $ovarizq_dimensiones = $request->ovarizq_dimensiones;
            $ovarizq_longitud = $request->ovarizq_longitud;
            $ovarizq_tranverso = $request->ovarizq_tranverso;
            $comentario_ovarizq = $request->comentario_ovarizq;
            $ovarder_dimensiones = $request->ovarder_dimensiones;
            $ovarder_longitud = $request->ovarder_longitud;
            $ovarder_tranverso = $request->ovarder_tranverso;
            $comentario_ovarder = $request->comentario_ovarder;
            $fondo_saco = $request->fondo_saco;
            $conclusion = $request->conclusion;
            $sugerencias = $request->sugerencias;
            $fecha = date('Y-m-d');
            $hora = date('H:i');
            $usuario = $request->usuario;

            $ecografia = [
                "documento_paciente" => $documento_paciente,
                "codigo_doctor" => $codigo_doctor,
                "utero_tipo" => $utero_tipo,
                "superficie_tipo" => $superficie_tipo,
                "endometrio" => $endometrio,
                "tumor_anexial" => $tumor_anexial,
                "utero_dimensiones" => $utero_dimensiones,
                "utero_longitud" => $utero_longitud,
                "utero_tranverso" => $utero_tranverso,
                "utero_antpost" => $utero_antpost,
                "comentario_utero" => $comentario_utero,
                "ovarizq_dimensiones" => $ovarizq_dimensiones,
                "ovarizq_longitud" => $ovarizq_longitud,
                "ovarizq_tranverso" => $ovarizq_tranverso,
                "comentario_ovarizq" => $comentario_ovarizq,
                "ovarder_dimensiones" => $ovarder_dimensiones,
                "ovarder_longitud" => $ovarder_longitud,
                "ovarder_tranverso" => $ovarder_tranverso,
                "comentario_ovarder" => $comentario_ovarder,
                "fondo_saco" => $fondo_saco,
                "conclusion" => $conclusion,
                "sugerencias" => $sugerencias,
                "fecha" => $fecha,
                "hora" => $hora,
                "usuario" => $usuario,
            ];

            $this->$ecografia->crearEcografiaTransvaginal($ecografia);
            return response()->json([
                'message' => 'La ecografia transvaginal se ha creado en la base de datos',
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


    public function crearEcografiaAbdominales(Request $request){
        try{
            $documento_paciente = $request->documento_paciente;
            $codigo_doctor = $request->codigo_doctor;
            $motivo_examen = $request->motivo_examen;
            $fecha = date('Y-m-d');
            $estomago = $request->estomago;
            $higado = $request->higado;
            $coledoco_diametro = $request->coledoco_diametro;
            $vesicula_volumen = $request->vesicula_volumen;
            $vesicula_paredes = $request->vesicula_paredes;
            $pancreas_volumen = $request->pancreas_volumen;
            $pancreas_ecoestructura = $request->pancreas_ecoestructura;
            $bazo_volumen = $request->bazo_volumen;
            $bazo_ecoestructura = $request->bazo_ecoestructura;
            $rinones_derecho = $request->rinones_derecho;
            $rinones_izquierdo = $request->rinones_izquierdo;
            $otros_hallazgos = $request->otros_hallazgos;
            $conclusiones = $request->conclusiones;
            $sugerencias = $request->sugerencias;

            $ecografia = [
                "documento_paciente" => $documento_paciente,
                "codigo_doctor" => $codigo_doctor,
                "motivo_examen" => $motivo_examen,
                "fecha" => $fecha,
                "estomago" => $estomago,
                "higado" => $higado,
                "coledoco_diametro" => $coledoco_diametro,
                "vesicula_volumen" => $vesicula_volumen,
                "vesicula_paredes" => $vesicula_paredes,
                "pancreas_volumen" => $pancreas_volumen,
                "pancreas_ecoestructura" => $pancreas_ecoestructura,
                "bazo_volumen" => $bazo_volumen,
                "bazo_ecoestructura" => $bazo_ecoestructura,
                "rinones_derecho" => $rinones_derecho,
                "rinones_izquierdo" => $rinones_izquierdo,
                "otros_hallazgos" => $otros_hallazgos,
                "conclusiones" => $conclusiones,
                "sugerencias" => $sugerencias,
            ];

            $this->$ecografia->crearEcografiaAbdominales($ecografia);
            return response()->json([
                'message' => 'La ecografia abdominales se ha creado en la base de datos',
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


    public function crearEcografiaArteriales(Request $request){
        try{
            $documento_paciente = $request->documento_paciente;
            $codigo_doctor = $request->codigo_doctor;
            $fecha = date('Y-m-d');
            $miembro_inferior = $request->miembro_inferior;
            $arteria_derecho_femoral_comun = $request->arteria_derecho_femoral_comun;
            $vps_derecho_femoral_comun = $request->vps_derecho_femoral_comun;
            $onda_derecho_femoral_comun = $request->onda_derecho_femoral_comun;
            $arteria_derecho_femoral_superficial = $request->arteria_derecho_femoral_superficial;
            $vps_derecho_femoral_superficial = $request->vps_derecho_femoral_superficial;
            $onda_derecho_femoral_superficial = $request->onda_derecho_femoral_superficial;
            $arteria_derecho_poplitea = $request->arteria_derecho_poplitea;
            $vps_derecho_poplitea = $request->vps_derecho_poplitea;
            $onda_derecho_poplitea = $request->onda_derecho_poplitea;
            $arteria_derecho_tibial_posterior = $request->arteria_derecho_tibial_posterior;
            $vps_derecho_tibial_posterior = $request->vps_derecho_tibial_posterior;
            $onda_derecho_tibial_posterior = $request->onda_derecho_tibial_posterior;
            $arteria_derecho_tibial_anterior = $request->arteria_derecho_tibial_anterior;
            $vps_derecho_tibial_anterior = $request->vps_derecho_tibial_anterior;
            $onda_derecho_tibial_anterior = $request->onda_derecho_tibial_anterior;
            $arteria_derecho_pedia = $request->arteria_derecho_pedia;
            $vps_derecho_pedia = $request->vps_derecho_pedia;
            $onda_derecho_pedia = $request->onda_derecho_pedia;
            $arteria_izquierdo_femoral_comun = $request->arteria_izquierdo_femoral_comun;
            $vps_izquierdo_femoral_comun = $request->vps_izquierdo_femoral_comun;
            $onda_izquierdo_femoral_comun = $request->onda_izquierdo_femoral_comun;
            $arteria_izquierdo_femoral_superficial = $request->arteria_izquierdo_femoral_superficial;
            $vps_izquierdo_femoral_superficial = $request->vps_izquierdo_femoral_superficial;
            $onda_izquierdo_femoral_superficial = $request->onda_izquierdo_femoral_superficial;
            $arteria_izquierdo_poplitea = $request->arteria_izquierdo_poplitea;
            $vps_izquierdo_poplitea = $request->vps_izquierdo_poplitea;
            $onda_izquierdo_poplitea = $request->onda_izquierdo_poplitea;
            $arteria_izquierdo_tibial_posterior = $request->arteria_izquierdo_tibial_posterior;
            $vps_izquierdo_tibial_posterior = $request->vps_izquierdo_tibial_posterior;
            $onda_izquierdo_tibial_posterior = $request->onda_izquierdo_tibial_posterior;
            $arteria_izquierdo_tibial_anterior = $request->arteria_izquierdo_tibial_anterior;
            $vps_izquierdo_tibial_anterior = $request->vps_izquierdo_tibial_anterior;
            $onda_izquierdo_tibial_anterior = $request->onda_izquierdo_tibial_anterior;
            $arteria_izquierdo_pedia = $request->arteria_izquierdo_pedia;
            $vps_izquierdo_pedia = $request->vps_izquierdo_pedia;
            $onda_izquierdo_pedia = $request->onda_izquierdo_pedia;
            $conclusion = $request->conclusion;
            $sugerencia = $request->sugerencia;

            $ecografia = [
                "documento_paciente" => $documento_paciente,
                "codigo_doctor" => $codigo_doctor,
                "fecha" => $fecha,
                "miembro_inferior" => $miembro_inferior,
                "arteria_derecho_femoral_comun" => $arteria_derecho_femoral_comun,
                "vps_derecho_femoral_comun" => $vps_derecho_femoral_comun,
                "onda_derecho_femoral_comun" => $onda_derecho_femoral_comun,
                "arteria_derecho_femoral_superficial" => $arteria_derecho_femoral_superficial,
                "vps_derecho_femoral_superficial" => $vps_derecho_femoral_superficial,
                "onda_derecho_femoral_superficial" => $onda_derecho_femoral_superficial,
                "arteria_derecho_poplitea" => $arteria_derecho_poplitea,
                "vps_derecho_poplitea" => $vps_derecho_poplitea,
                "onda_derecho_poplitea" => $onda_derecho_poplitea,
                "arteria_derecho_tibial_posterior" => $arteria_derecho_tibial_posterior,
                "vps_derecho_tibial_posterior" => $vps_derecho_tibial_posterior,
                "onda_derecho_tibial_posterior" => $onda_derecho_tibial_posterior,
                "arteria_derecho_tibial_anterior" => $arteria_derecho_tibial_anterior,
                "vps_derecho_tibial_anterior" => $vps_derecho_tibial_anterior,
                "onda_derecho_tibial_anterior" => $onda_derecho_tibial_anterior,
                "arteria_derecho_pedia" => $arteria_derecho_pedia,
                "vps_derecho_pedia" => $vps_derecho_pedia,
                "onda_derecho_pedia" => $onda_derecho_pedia,
                "arteria_izquierdo_femoral_comun" => $arteria_izquierdo_femoral_comun,
                "vps_izquierdo_femoral_comun" => $vps_izquierdo_femoral_comun,
                "onda_izquierdo_femoral_comun" => $onda_izquierdo_femoral_comun,
                "arteria_izquierdo_femoral_superficial" => $arteria_izquierdo_femoral_superficial,
                "vps_izquierdo_femoral_superficial" => $vps_izquierdo_femoral_superficial,
                "onda_izquierdo_femoral_superficial" => $onda_izquierdo_femoral_superficial,
                "arteria_izquierdo_poplitea" => $arteria_izquierdo_poplitea,
                "vps_izquierdo_poplitea" => $vps_izquierdo_poplitea,
                "onda_izquierdo_poplitea" => $onda_izquierdo_poplitea,
                "arteria_izquierdo_tibial_posterior" => $arteria_izquierdo_tibial_posterior,
                "vps_izquierdo_tibial_posterior" => $vps_izquierdo_tibial_posterior,
                "onda_izquierdo_tibial_posterior" => $onda_izquierdo_tibial_posterior,
                "arteria_izquierdo_tibial_anterior" => $arteria_izquierdo_tibial_anterior,
                "vps_izquierdo_tibial_anterior" => $vps_izquierdo_tibial_anterior,
                "onda_izquierdo_tibial_anterior" => $onda_izquierdo_tibial_anterior,
                "arteria_izquierdo_pedia" => $arteria_izquierdo_pedia,
                "vps_izquierdo_pedia" => $vps_izquierdo_pedia,
                "onda_izquierdo_pedia" => $onda_izquierdo_pedia,
                "conclusion" => $conclusion,
                "sugerencia" => $sugerencia,
            ];
            $this->$ecografia->crearEcografiaArteriales($ecografia);
            return response()->json([
                'message' => 'La ecografia arteriales se ha creado en la base de datos',
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

    public function crearEcografiaHisteronosografias(Request $request){
        try{
            $documento_paciente = $request->documento_paciente;
            $codigo_doctor = $request->codigo_doctor;
            $fecha = $request->fecha;
            $informe = $request->informe;
            $paciente_tolera_procedimiento = $request->paciente_tolera_procedimiento;
            $conclusiones = $request->conclusiones;
            $sugerencias = $request->sugerencias;

            $ecografia = [
                "documento_paciente" => $documento_paciente,
                "codigo_doctor" => $codigo_doctor,
                "fecha" => $fecha,
                "informe" => $informe,
                "paciente_tolera_procedimiento" => $paciente_tolera_procedimiento,
                "conclusiones" => $conclusiones,
                "sugerencias" => $sugerencias,
            ];

            $this->$ecografia->crearEcografiaHisteronosografias($ecografia);
            return response()->json([
                'message' => 'La ecografia histeronosografias se ha creado en la base de datos',
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


    public function crearEcografiaProstaticas(Request $request){
        try{
            $documento_paciente = $request->documento_paciente;
            $codigo_doctor = $request->codigo_doctor;
            $motivo_examen = $request->motivo_examen;
            $fecha = $request->fecha;
            $repelcion_vejiga = $request->repelcion_vejiga;
            $paredes_vejiga = $request->paredes_vejiga;
            $contenido_aneocoico = $request->contenido_aneocoico;
            $imagenes_expansivas = $request->imagenes_expansivas;
            $calculos = $request->calculos;
            $calculos_medida = $request->calculos_medida;
            $vol_pre_miccional = $request->vol_pre_miccional;
            $vol_post_miccional = $request->vol_post_miccional;
            $retencion = $request->retencion;
            $descripcion_vejiga = $request->descripcion_vejiga;
            $bordes_prostata = $request->bordes_prostata;
            $dimensiones_transverso = $request->dimensiones_transverso;
            $dimensiones_antero_posterior = $request->dimensiones_antero_posterior;
            $dimensiones_longitudinal = $request->dimensiones_longitudinal;
            $volumen = $request->volumen;
            $observaciones = $request->observaciones;
            $conclusiones = $request->conclusiones;
            $sugerencias = $request->sugerencias;

            $ecografia = [
                "documento_paciente" => $documento_paciente,
                "codigo_doctor" => $codigo_doctor,
                "motivo_examen" => $motivo_examen,
                "fecha" => $fecha,
                "repelcion_vejiga" => $repelcion_vejiga,
                "paredes_vejiga" => $paredes_vejiga,
                "contenido_aneocoico" => $contenido_aneocoico,
                "imagenes_expansivas" => $imagenes_expansivas,
                "calculos" => $calculos,
                "calculos_medida" => $calculos_medida,
                "vol_pre_miccional" => $vol_pre_miccional,
                "vol_post_miccional" => $vol_post_miccional,
                "retencion" => $retencion,
                "descripcion_vejiga" => $descripcion_vejiga,
                "bordes_prostata" => $bordes_prostata,
                "dimensiones_transverso" => $dimensiones_transverso,
                "dimensiones_antero_posterior" => $dimensiones_antero_posterior,
                "dimensiones_longitudinal" => $dimensiones_longitudinal,
                "volumen" => $volumen,
                "observaciones" => $observaciones,
                "conclusiones" => $conclusiones,
                "sugerencias" => $sugerencias,
            ];

            $this->$ecografia->crearEcografiaProstaticas($ecografia);
            return response()->json([
                'message' => 'La ecografia prostaticas se ha creado en la base de datos',
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


    public function crearEcografiaRenales(Request $request){
        try{
            $documento_paciente = $request->documento_paciente;
            $codigo_doctor = $request->codigo_doctor;
            $motivo_examen = $request->motivo_examen;
            $fecha = date('Y-m-d');
            $morfologia_movilidad_derecho = $request->morfologia_movilidad_derecho;
            $ecogenicidad_derecho = $request->ecogenicidad_derecho;
            $medidas_longitud_derecho = $request->medidas_longitud_derecho;
            $medidas_parenquima_derecho = $request->medidas_parenquima_derecho;
            $imagenes_expansivas_solidas_derecho = $request->imagenes_expansivas_solidas_derecho;
            $imagenes_expansivas_quisticas_derecho = $request->imagenes_expansivas_quisticas_derecho;
            $hidronefrosis_derecho = $request->hidronefrosis_derecho;
            $micro_litiasis_derecho = $request->micro_litiasis_derecho;
            $calculos_derecho = $request->calculos_derecho;
            $calculos_medida_derecho = $request->calculos_medida_derecho;
            $descripcion_otros_derecho = $request->descripcion_otros_derecho;
            $morfologia_movilidad_izquierdo = $request->morfologia_movilidad_izquierdo;
            $ecogenicidad_izquierdo = $request->ecogenicidad_izquierdo;
            $medidas_longitud_izquierdo = $request->medidas_longitud_izquierdo;
            $medidas_parenquima_izquierdo = $request->medidas_parenquima_izquierdo;
            $imagenes_expansivas_solidas_izquierdo = $request->imagenes_expansivas_solidas_izquierdo;
            $imagenes_expansivas_quisticas_izquierdo = $request->imagenes_expansivas_quisticas_izquierdo;
            $hidronefrosis_izquierdo = $request->hidronefrosis_izquierdo;
            $micro_litiasis_izquierdo = $request->micro_litiasis_izquierdo;
            $calculos_izquierdo = $request->calculos_izquierdo;
            $calculos_medida_izquierdo = $request->calculos_medida_izquierdo;
            $descripcion_otros_izquierdo = $request->descripcion_otros_izquierdo;
            $repelcion_vejiga = $request->repelcion_vejiga;
            $paredes_vejiga = $request->paredes_vejiga;
            $contenido_aneocoico = $request->contenido_aneocoico;
            $imagenes_expansivas_vejiga = $request->imagenes_expansivas_vejiga;
            $calculos_vejiga = $request->calculos_vejiga;
            $calculos_medida_vejiga = $request->calculos_medida_vejiga;
            $vol_pre_miccional = $request->vol_pre_miccional;
            $vol_post_miccional = $request->vol_post_miccional;
            $retencion = $request->retencion;
            $descripcion_vejiga = $request->descripcion_vejiga;
            $observaciones = $request->observaciones;
            $conclusiones = $request->conclusiones;
            $sugerencias = $request->sugerencias;

            $ecografia = [
                "documento_paciente" => $documento_paciente,
                "codigo_doctor" => $codigo_doctor,
                "motivo_examen" => $motivo_examen,
                "fecha" => $fecha,
                "morfologia_movilidad_derecho" => $morfologia_movilidad_derecho,
                "ecogenicidad_derecho" => $ecogenicidad_derecho,
                "medidas_longitud_derecho" => $medidas_longitud_derecho,
                "medidas_parenquima_derecho" => $medidas_parenquima_derecho,
                "imagenes_expansivas_solidas_derecho" => $imagenes_expansivas_solidas_derecho,
                "imagenes_expansivas_quisticas_derecho" => $imagenes_expansivas_quisticas_derecho,
               "hidronefrosis_derecho" => $hidronefrosis_derecho,
                "micro_litiasis_derecho" => $micro_litiasis_derecho,
                "calculos_derecho" => $calculos_derecho,
                "calculos_medida_derecho" => $calculos_medida_derecho,
                "descripcion_otros_derecho" => $descripcion_otros_derecho,
                "morfologia_movilidad_izquierdo" => $morfologia_movilidad_izquierdo,
                "ecogenicidad_izquierdo" => $ecogenicidad_izquierdo,
                "medidas_longitud_izquierdo" => $medidas_longitud_izquierdo,
                "medidas_parenquima_izquierdo" => $medidas_parenquima_izquierdo,
                "imagenes_expansivas_solidas_izquierdo" => $imagenes_expansivas_solidas_izquierdo,
                "imagenes_expansivas_quisticas_izquierdo" => $imagenes_expansivas_quisticas_izquierdo,
                "hidronefrosis_izquierdo" => $hidronefrosis_izquierdo,
                "micro_litiasis_izquierdo" => $micro_litiasis_izquierdo,
                "calculos_izquierdo" => $calculos_izquierdo,
                "calculos_medida_izquierdo" => $calculos_medida_izquierdo,
                "descripcion_otros_izquierdo" => $descripcion_otros_izquierdo,
                "repelcion_vejiga" => $repelcion_vejiga,
                "paredes_vejiga" => $paredes_vejiga,
                "contenido_aneocoico" => $contenido_aneocoico,
                "imagenes_expansivas_vejiga" => $imagenes_expansivas_vejiga,
                "calculos_vejiga" => $calculos_vejiga,
                "calculos_medida_vejiga" => $calculos_medida_vejiga,
                "vol_pre_miccional" => $vol_pre_miccional,
                "vol_post_miccional" => $vol_post_miccional,
                "retencion" => $retencion,
                "descripcion_vejiga" => $descripcion_vejiga,
                "observaciones" => $observaciones,
                "conclusiones" => $conclusiones,
                "sugerencias" => $sugerencias,
            ];

            $this->$ecografia->crearEcografiaRenales($ecografia);
            return response()->json([
                'message' => 'La ecografia renales se ha creado en la base de datos',
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

}
