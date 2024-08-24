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

}
