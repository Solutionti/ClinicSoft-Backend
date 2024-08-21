<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// importante
use Illuminate\Support\Facades\DB;

class Ecografia extends Model
{
    use HasFactory;

    public function crearEcografiaGenetica($ecografia) {
    //   $prueba = DB::table("ecografias")
    //       ->select("*")
    //       ->get();
    //   return $prueba;
    //crear una ecografia
    //definicion
      $ecografia = [
        "documento_paciente" => $cografias['documento_paciente'],
        "codigo_doctor" => $cografias['codigo_doctor'],
        "posicion_feto" => $cografias['posicion_feto'],
        "situacion_feto" => $cografias['situacion_feto'],
        "liquido_amniotico" => $cografias['liquido_amniotico'],
        "placenta" => $cografias['placenta'],
        "lcr" => $cografias['lcr'],
        "lcf" => $cografias['lcf'],
        "art_uteder" => $cografias['art_uteder'],
        "art_uteizq" => $cografias['art_uteizq'],
        "ip_promedio" => $cografias['ip_promedio'],
        "translucencia_nucal" => $cografias['translucencia_nucal'],
        "ductud_venosa" => $cografias['ductud_venosa'],
        "conclusion" => $cografias['conclusion'],
        "sugerencia" => $cografias['sugerencia'],
        "fecha" => $cografias['fecha'],
        "hora" => $cografias['hora'],
        "usuario" => $cografias['usuario'],
    ];

    //salida
    DB::table("ecogragia_genetica")
       ->insert($ecografia);

    }


    public function crearEcografiaMama($ecografia){

        $ecografia =[
            "codigo_doctor" => $ecografia['codigo_doctor'],
            "pezon_izq" => $ecografia['pezon_izq'],
            "tcsc_izq" => $ecografia['tcsc_izq'],
            "tejido_glandular_izq" => $ecografia['tejido_glandular_izq'],
            "axila_izq" => $ecogrfia['axila_izq'],
            "comentario_mama_izq" => $ecografia['comentario_mama_izq'],
            "pezon_der" => $ecografia['pezon_der'],
            "tcsc_der" => $ecografia['tcsc_der'],
            "tejido_glandular_der" => $ecografia['tejido_glandular_der'],
            "axila_der" => $ecografia['axila_der'],
            "comentario_der" => $ecografia['comentario_der'],
            "conclusion_mama" => $ecografia['conclusion_mama'],
            "sugerencias_mama" => $ecografia['sugerencias_mama'],
            "fecha" => $ecografia['fecha'],
            "hora" => $ecografia['hora'],
            "usuario" => $ecografia['usuario'],
    ];
    DB::table("ecografia_mama")
       ->insert($ecografia);
    }

    public function crearEcografiaMorfologica($ecografia){
        $ecografia = [
            "documento_paciente" => $ecografia['documento_paciente'],
            "codigo_doctor" => $ecografia['codigo_doctor'],
            "sexo_feto" => $ecografia['sexo_feto'],
            "situacion" =>$ecografia['situacion'],
            "forma_cabeza" => $ecografia['forma_cabeza'],
            "cerebelo" => $ecografia['cerebelo'],
            "cisterna_magna" => $ecografia['cisterna_magna'],
            "atrio_ventricular" => $ecografia['atrio_ventricular'],
            "perfil_cara" => $ecografia['perfil_cara'],
            "cuello" => $ecografia['cuello'],
            "torax" => $ecografia['torax'],
            "corazon" => $ecografia['corazon'],
            "columna" => $ecografia['columna'],
            "abdomen" => $ecografia['abdomen'],
            "dbp" => $ecografia['dbp'],
            "cc" => $ecografia['cc'],
            "ca" => $ecografia['ca'],
            "lf" => $ecografia['lf'],
            "comentario_fetal" => $ecografia['comentario_fetal'],
            "ip_der" => $ecografia['ip_der'],
            "ip_izq" => $ecografia['ip_izq'],
            "ponderado_fetal" => $ecografia['ponderado_fetal'],
            "lcf_fetal" => $ecografia['lcf_fetal'],
            "conclusiones" => $ecografia['conclusiones'],
            "fecha" => $ecografia['fecha'],
            "hora" => $ecografia['hora'],
            "usuario" => $ecografia['usuario'],
        ];
        DB::table("ecografia_morfologica")
           ->inser($ecografia);
    }
}
