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

        $ecografia = [
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

    public function crearEcografiaObstetrica($ecografia){

        $ecografia = [
            "documento_paciente" => $ecografia['documento_paciente'],
            "codigo_doctor" => $ecografia['codigo_doctor'],
            "feto_embrion" => $ecografia['feto_embrion'],
            "situacion_feto" => $ecografia['situacion_feto'],
            "estado_feto" => $ecografia['estado_feto'],
            "placenta" => $ecografia['placenta'],
            "dpb" => $ecografia['dpb'],
            "lcf" => $ecografia['lcf'],
            "min" => $ecografia['min'],
            "cc" => $ecografia['cc'],
            "ca" => $ecografia['ca'],
            "lf" => $ecografia['lf'],
            "ila" => $ecografia['ila'],
            "percentil" => $ecografia['percentil'],
            "tipo_parto" => $ecografia['tipo_parto'],
            "conclusion" => $ecografia['conclusion'],
            "sugerencia" => $ecografia['sugerencia'],
            "fecha" => $ecografia['fecha'],
            "hora" => $ecografia['hora'],
            "usuario" => $ecografia['usuario'],
        ];
        DB::table("ecografia_obstetrica")
           ->inser($ecografia);
    }

    public function crearEcografiaPelvica($ecografia){

        $ecografia = [
            "documento_paciente" => $ecografia['documento_paciente'],
            "codigo_doctor" => $ecografia['codigo_doctor'],
            "utero_tipo" => $ecografia['utero_tipo'],
            "superficie_tipo" => $ecografia['superficie_tipo'],
            "endometrio" => $ecografia['endometrio'],
            "tumor_anexial" => $ecografia['tumor_anexial'],
            "utero_dimensiones" => $ecografia['utero_dimensiones'],
            "utero_longitud" => $ecografia['utero_longitud'],
            "utero_tranverso" => $ecografia['utero_tranverso'],
            "utero_antpost" => $ecografia['utero_antpost'],
            "comentario_utero" => $ecografia['comentario_utero'],
            "ovarizq_dimensiones" => $ecografia['ovarizq_dimensiones'],
            "ovarizq_longitud" => $ecografia['ovarizq_longitud'],
            "ovarizq_tranverso" => $ecografia['ovarizq_tranverso'],
            "comentario_ovarizq" => $ecografia['comentario_ovarizq'],
            "ovarder_dimensiones" => $ecografia['ovarder_dimensiones'],
            "ovarder_longitud" => $ecografia['ovarder_longitud'],
            "ovarder_tranverso" => $ecografia['ovarder_tranverso'],
            "comentario_ovarder" => $ecografia['comentario_ovarder'],
            "fondo_saco" => $ecografia['fondo_saco'],
            "miometrio" => $ecografia['miometrio'],
            "conclusion" => $ecografia['conclusion'],
            "sugerencias" => $ecografia['sugerencias'],
            "fecha" => $ecografia['fecha'],
            "hora" => $ecografia['hora'],
            "usuario" => $ecografia['usuario'],
        ];
        DB::table('ecografia_pelvica')
           ->inser($ecografia);
    }


    public function crearEcografiaTransvaginal($ecografia){

        $ecografia = [
            "documento_paciente" => $ecografia['documento_paciente'],
            "codigo_doctor" => $ecografia['codigo_doctor'],
            "utero_tipo" => $ecografia['utero_tipo'],
            "superficie_tipo" => $ecografia['superficie_tipo'],
            "endometrio" => $ecografia['endometrio'],
            "tumor_anexial" => $ecografia['tumor_anexial'],
            "utero_dimensiones" => $ecografia['utero_dimensiones'],
            "utero_longitud" => $ecografia['utero_longitud'],
            "utero_tranverso" => $ecografia['utero_tranverso'],
            "utero_antpost" => $ecografia['utero_antpost'],
            "comentario_utero" => $ecografia['comentario_utero'],
            "ovarizq_dimensiones" => $ecografia['ovarizq_dimensiones'],
            "ovarizq_longitud" => $ecografia['ovarizq_longitud'],
            "ovarizq_tranverso" => $ecografia['ovarizq_tranverso'],
            "comentario_ovarizq" => $ecografia['comentario_ovarizq'],
            "ovarder_dimensiones" => $ecografia['ovarder_dimensiones'],
            "ovarder_longitud" => $ecografia['ovarder_longitud'],
            "ovarder_tranverso" => $ecografia['ovarder_tranverso'],
            "comentario_ovarder" => $ecografia['comentario_ovarder'],
            "fondo_saco" => $ecografia['fondo_saco'],
            "conclusion" => $ecografia['conclusion'],
            "sugerencias" => $ecografia['sugerencias'],
            "fecha" => $ecografia['fecha'],
            "hora" => $ecografia['hora'],
            "usuario" => $ecografia['usuario'],
        ];
        DB::table('ecografia_transvaginal')
           ->inser($ecografia);
    }


    public function crearEcografiaAbdominales($ecografia){

        $ecografia = [
            "documento_paciente" => $ecografia['documento_paciente'],
            "codigo_doctor" => $ecografia['codigo_doctor'],
            "motivo_examen" => $ecografia['motivo_examen'],
            "fecha" => $ecografia['fecha'],
            "estomago" => $ecografia['estomago'],
            "higado" => $ecografia['higado'],
            "coledoco_diametro" => $ecografia['coledoco_diametro'],
            "vesicula_volumen" => $ecografia['vesicula_volumen'],
            "vesicula_paredes" => $ecografia['vesicula_paredes'],
            "pancreas_volumen" => $ecografia['pancreas_volumen'],
            "pancreas_ecoestructura" => $ecografia['pancreas_ecoestructura'],
            "bazo_volumen" => $ecografia['bazo_volumen'],
            "bazo_ecoestructura" => $ecografia['bazo_ecoestructura'],
            "rinones_derecho" => $ecografia['rinones_derecho'],
            "rinones_izquierdo" => $ecografia['rinones_izquierdo'],
            "otros_hallazgos" => $ecografia['otros_hallazgos'],
            "conclusiones" => $ecografia['conclusiones'],
            "sugerencias" => $ecografia['sugerencias'],
        ];
        DB::table('ecografia_abdominales')
           ->inser($ecografia);
    }


    public function crearEcografiaArteriales($ecografia){

        $ecografia = [
            "documento_paciente" => $ecografia['documento_paciente'],
            "codigo_doctor" => $ecografia['codigo_doctor'],
            "fecha" => $ecografia['fecha'],
            "miembro_inferior" => $ecografia['miembro_inferior'],
            "arteria_derecho_femoral_comun" => $ecografia['arteria_derecho_femoral_comun'],
            "vps_derecho_femoral_comun" => $ecografia['vps_derecho_femoral_comun'],
            "onda_derecho_femoral_comun" => $ecografia['onda_derecho_femoral_comun'],
            "arteria_derecho_femoral_superficial" => $ecografia['arteria_derecho_femoral_superficial'],
            "vps_derecho_femoral_superficial" => $ecografia['vps_derecho_femoral_superficial'],
            "onda_derecho_femoral_superficial" => $ecografia['onda_derecho_femoral_superficial'],
            "arteria_derecho_poplitea" => $ecografia['arteria_derecho_poplitea'],
            "vps_derecho_poplitea" => $ecografia['vps_derecho_poplitea'],
            "onda_derecho_poplitea" => $ecografia['onda_derecho_poplitea'],
            "arteria_derecho_tibial_posterior" => $ecografia['arteria_derecho_tibial_posterior'],
            "vps_derecho_tibial_posterior" => $ecografia['vps_derecho_tibial_posterior'],
            "onda_derecho_tibial_posterior" => $ecografia['onda_derecho_tibial_posterior'],
            "arteria_derecho_tibial_anterior" => $ecografia['arteria_derecho_tibial_anterior'],
            "vps_derecho_tibial_anterior" => $ecografia['vps_derecho_tibial_anterior'],
            "onda_derecho_tibial_anterior" => $ecografia['onda_derecho_tibial_anterior'],
            "arteria_derecho_pedia" => $ecografia['arteria_derecho_pedia'],
            "vps_derecho_pedia" => $ecografia['vps_derecho_pedia'],
            "onda_derecho_pedia" => $ecografia['onda_derecho_pedia'],
            "arteria_izquierdo_femoral_comun" => $ecografia['arteria_izquierdo_femoral_comun'],
            "vps_izquierdo_femoral_comun" => $ecografia['vps_izquierdo_femoral_comun'],
            "onda_izquierdo_femoral_comun" => $ecografia['onda_izquierdo_femoral_comun'],
            "arteria_izquierdo_femoral_superficial" => $ecografia['arteria_izquierdo_femoral_superficial'],
            "vps_izquierdo_femoral_superficial" => $ecografia['vps_izquierdo_femoral_superficial'],
            "onda_izquierdo_femoral_superficial" => $ecografia['onda_izquierdo_femoral_superficial'],
            "arteria_izquierdo_poplitea" => $ecografia['arteria_izquierdo_poplitea'],
            "vps_izquierdo_poplitea" => $ecografia['vps_izquierdo_poplitea'],
            "onda_izquierdo_poplitea" => $ecografia['onda_izquierdo_poplitea'],
            "arteria_izquierdo_tibial_posterior" => $ecografia['arteria_izquierdo_tibial_posterior'],
            "vps_izquierdo_tibial_posterior" => $ecografia['vps_izquierdo_tibial_posterior'],
            "onda_izquierdo_tibial_posterior" => $ecografia['onda_izquierdo_tibial_posterior'],
            "arteria_izquierdo_tibial_anterior" => $ecografia['arteria_izquierdo_tibial_anterior'],
            "vps_izquierdo_tibial_anterior" => $ecografia['vps_izquierdo_tibial_anterior'],
            "onda_izquierdo_tibial_anterior" => $ecografia['onda_izquierdo_tibial_anterior'],
            "arteria_izquierdo_pedia" => $ecografia['arteria_izquierdo_pedia'],
            "vps_izquierdo_pedia" => $ecografia['vps_izquierdo_pedia'],
            "onda_izquierdo_pedia" => $ecografia['onda_izquierdo_pedia'],
            "conclusion" => $ecografia['conclusion'],
            "sugerencia" => $ecografia['sugerencia'],
        ];
        DB::table('ecografia_arteriales')
           ->inser($ecografia);
    }


    public function crearEcografiaHisteronosografias($ecografia){

        $ecografia = [
            "documento_paciente" => $ecografia['documento_paciente'],
            "codigo_doctor" => $ecografia['codigo_doctor'],
            "fecha" => $ecografia['fecha'],
            "informe" => $ecografia['informe'],
            "paciente_tolera_procedimiento" => $ecografia['paciente_tolera_procedimiento'],
            "conclusiones" => $ecografia['conclusiones'],
            "sugerencias" => $ecografia['sugerencias'],
        ];
        DB::table('ecografia_histeronosografias')
           ->inser($ecografia);
    }


    public function crearEcografiaProstaticas($ecografia){

        $ecografia = [
            "documento_paciente" => $ecografia['documento_paciente'],
            "codigo_doctor" => $ecografia['codigo_doctor'],
            "motivo_examen" => $ecografia['motivo_examen'],
            "fecha" => $ecografia['fecha'],
            "repelcion_vejiga" => $ecografia['repelcion_vejiga'],
            "paredes_vejiga" => $ecografia['paredes_vejiga'],
            "contenido_aneocoico" => $ecografia['contenido_aneocoico'],
            "imagenes_expansivas" => $ecografia['imagenes_expansivas'],
            "calculos" => $ecografia['calculos'],
            "calculos_medida" => $ecografia['calculos_medida'],
            "vol_pre_miccional" => $ecografia['vol_pre_miccional'],
            "vol_post_miccional" => $ecografia['vol_post_miccional'],
            "retencion" => $ecografia['retencion'],
            "descripcion_vejiga" => $ecografia['descripcion_vejiga'],
            "bordes_prostata" => $ecografia['bordes_prostata'],
            "dimensiones_transverso" => $ecografia['dimensiones_transverso'],
            "dimensiones_antero_posterior" => $ecografia['dimensiones_antero_posterior'],
            "dimensiones_longitudinal" => $ecografia['dimensiones_longitudinal'],
            "volumen" => $ecografia['volumen'],
            "observaciones" => $ecografia['observaciones'],
            "conclusiones" => $ecografia['conclusiones'],
            "sugerencias" => $ecografia['sugerencias'],
        ];
        DB::table('ecografia_prostaticas')
           ->inser($ecografia);
    }

    public function crearEcografiaRenales($ecografia){

        $ecografia = [
            "documento_paciente" => $ecografia['documento_paciente'],
            "codigo_doctor" => $ecografia['codigo_doctor'],
            "motivo_examen" => $ecografia['motivo_examen'],
            "fecha" => $ecografia['fecha'],
            "morfologia_movilidad_derecho" => $ecografia['morfologia_movilidad_derecho'],
            "ecogenicidad_derecho" => $ecografia['ecogenicidad_derecho'],
            "medidas_longitud_derecho" => $ecografia['medidas_longitud_derecho'],
            "medidas_parenquima_derecho" => $ecografia['medidas_parenquima_derecho'],
            "imagenes_expansivas_solidas_derecho" => $ecografia['imagenes_expansivas_solidas_derecho'],
            "imagenes_expansivas_quisticas_derecho" => $ecografia['imagenes_expansivas_quisticas_derecho'],
            "hidronefrosis_derecho" => $ecografia['hidronefrosis_derecho'],
            "micro_litiasis_derecho" => $ecografia['micro_litiasis_derecho'],
            "calculos_derecho" => $ecografia['calculos_derecho'],
            "calculos_medida_derecho" => $ecografia['calculos_medida_derecho'],
            "descripcion_otros_derecho" => $ecografia['descripcion_otros_derecho'],
            "morfologia_movilidad_izquierdo" => $ecografia['morfologia_movilidad_izquierdo'],
            "ecogenicidad_izquierdo" => $ecografia['ecogenicidad_izquierdo'],
            "medidas_longitud_izquierdo" => $ecografia['medidas_longitud_izquierdo'],
            "medidas_parenquima_izquierdo" => $ecografia['medidas_parenquima_izquierdo'],
            "imagenes_expansivas_solidas_izquierdo" => $ecografia['imagenes_expansivas_solidas_izquierdo'],
            "imagenes_expansivas_quisticas_izquierdo" => $ecografia['imagenes_expansivas_quisticas_izquierdo'],
            "hidronefrosis_izquierdo" => $ecografia['hidronefrosis_izquierdo'],
            "micro_litiasis_izquierdo" => $ecografia['micro_litiasis_izquierdo'],
            "calculos_izquierdo" => $ecografia['calculos_izquierdo'],
            "calculos_medida_izquierdo" => $ecografia['calculos_medida_izquierdo'],
            "descripcion_otros_izquierdo" => $ecografia['descripcion_otros_izquierdo'],
            "repelcion_vejiga" => $ecografia['repelcion_vejiga'],
            "paredes_vejiga" => $ecografia['paredes_vejiga'],
            "contenido_aneocoico" => $ecografia['contenido_aneocoico'],
            "imagenes_expansivas_vejiga" => $ecografia['imagenes_expansivas_vejiga'],
            "calculos_vejiga" => $ecografia['calculos_vejiga'],
            "calculos_medida_vejiga" => $ecografia['calculos_medida_vejiga'],
            "vol_pre_miccional" => $ecografia['vol_pre_miccional'],
            "vol_post_miccional" => $ecografia['vol_post_miccional'],
            "retencion" => $ecografia['retencion'],
            "descripcion_vejiga" => $ecografia['descripcion_vejiga'],
            "observaciones" => $ecografia['observaciones'],
            "conclusiones" => $ecografia['conclusiones'],
            "sugerencias" => $ecografia['sugerencias'],
        ];
        DB::table('ecografia_renales')
           ->inser($ecografia);
    }

    public function crearEcografiaTiroides($ecografia){

        $ecografia = [
            "documento_paciente" => $ecografia['documento_paciente'],
            "codigo_doctor" => $ecografia['codigo_doctor'],
            "examen_solicitado" => $ecografia['examen_solicitado'],
            "medico_tratante" => $ecografia['medico_tratante'],
            "fecha" => $ecografia['fecha'],
            "tiroides_ubicacion" => $ecografia['tiroides_ubicacion'],
           "parenquima" => $ecografia['parenquima'],
            "lesiones_focales" => $ecografia['lesiones_focales'],
            "lobulo_derecho_longitud" => $ecografia['lobulo_derecho_longitud'],
            "lobulo_derecho_ancho" => $ecografia['lobulo_derecho_ancho'],
            "lobulo_derecho_profundidad" => $ecografia['lobulo_derecho_profundidad'],
            "volumen_derecho" => $ecografia['volumen_derecho'],
            "masas_quistes_derecho" => $ecografia['masas_quistes_derecho'],
            "istmo" => $ecografia['istmo'],
            "lobulo_izquierdo_longitud" => $ecografia['lobulo_izquierdo_longitud'],
            "lobulo_izquierdo_ancho" => $ecografia['lobulo_izquierdo_ancho'],
            "lobulo_izquierdo_profundidad" => $ecografia['lobulo_izquierdo_profundidad'],
            "volumen_izquierdo" => $ecografia['volumen_izquierdo'],
            "masas_quistes_izquierdo" => $ecografia['masas_quistes_izquierdo'],
            "estructuras_vasculares" => $ecografia['estructuras_vasculares'],
            "glandulas_submaxilares" => $ecografia['glandulas_submaxilares'],
            "adenopatia_cervicales" => $ecografia['adenopatia_cervicales'],
            "piel" => $ecografia['piel'],
            "tcsc" => $ecografia['tcsc'],
            "conclusiones" => $ecografia['conclusiones'],
            "sugerencias" => $ecografia['sugerencias'],
        ];
        DB::table('ecografia_tiroides')
           ->inser($ecografia);
    }


    public function crearEcografiaVenosas($ecografia){

        $ecografia = [
            "dni_paciente" => $ecografia['dni_paciente'],
            "codigo_doctor" => $ecografia['codigo_doctor'],
            "fecha" => $ecografia['fecha'],
            "miembro_inferior_der" => $ecografia['miembro_inferior_der'],
            "vena_derecho_femoral_comun" => $ecografia['vena_derecho_femoral_comun'],
            "medida_derecho_femoral_comun" => $ecografia['medida_derecho_femoral_comun'],
            "reflujo_derecho_femoral_comun" => $ecografia['reflujo_derecho_femoral_comun'],
            "vena_derecho_safena_mayor_muslo" => $ecografia['vena_derecho_safena_mayor_muslo'],
            "medida_derecho_safena_mayor_muslo" => $ecografia['medida_derecho_safena_mayor_muslo'],
            "reflujo_derecho_safena_mayor_muslo" => $ecografia['reflujo_derecho_safena_mayor_muslo'],
            "vena_derecho_safena_mayor_pierna" => $ecografia['vena_derecho_safena_mayor_pierna'],
            "medida_derecho_safena_mayor_pierna" => $ecografia['medida_derecho_safena_mayor_pierna'],
            "reflujo_derecho_safena_mayor_pierna" => $ecografia['reflujo_derecho_safena_mayor_pierna'],
            "vena_derecho_poplitea" => $ecografia['vena_derecho_poplitea'],
            "medida_derecho_poplitea" => $ecografia['medida_derecho_poplitea'],
            "reflujo_derecho_poplitea" => $ecografia['reflujo_derecho_poplitea'],
            "vena_derecho_safena_menor" => $ecografia['vena_derecho_safena_menor'],
            "medida_derecho_safena_menor" => $ecografia['medida_derecho_safena_menor'],
            "reflujo_derecho_safena_menor" => $ecografia['reflujo_derecho_safena_menor'],
            "vena_derecho_perforantes" => $ecografia['vena_derecho_perforantes'],
            "medida_derecho_perforantes" => $ecografia['medida_derecho_perforantes'],
            "reflujo_derecho_perforantes" => $ecografia['reflujo_derecho_perforantes'],
            "miembro_inferior_izq" => $ecografia['miembro_inferior_izq'],
            "vena_izquierdo_femoral_comun" => $ecografia['vena_izquierdo_femoral_comun'],
            "medida_izquierdo_femoral_comun" => $ecografia['medida_izquierdo_femoral_comun'],
            "reflujo_izquierdo_femoral_comun" => $ecografia['reflujo_izquierdo_femoral_comun'],
            "vena_izquierdo_safena_mayor_muslo" => $ecografia['vena_izquierdo_safena_mayor_muslo'],
            "medida_izquierdo_safena_mayor_muslo" => $ecografia['medida_izquierdo_safena_mayor_muslo'],
            "reflujo_izquierdo_safena_mayor_muslo" => $ecografia['reflujo_izquierdo_safena_mayor_muslo'],
            "vena_izquierdo_safena_mayor_pierna" => $ecografia['vena_izquierdo_safena_mayor_pierna'],
            "medida_izquierdo_safena_mayor_pierna" => $ecografia['medida_izquierdo_safena_mayor_pierna'],
            "reflujo_izquierdo_safena_mayor_pierna" => $ecografia['reflujo_izquierdo_safena_mayor_pierna'],
            "vena_izquierdo_poplitea" => $ecografia['vena_izquierdo_poplitea'],
            "medida_izquierdo_poplitea" => $ecografia['medida_izquierdo_poplitea'],
            "reflujo_izquierdo_poplitea" => $ecografia['reflujo_izquierdo_poplitea'],
            "vena_izquierdo_safena_menor" => $ecografia['vena_izquierdo_safena_menor'],
            "medida_izquierdo_safena_menor" => $ecografia['medida_izquierdo_safena_menor'],
            "reflujo_izquierdo_safena_menor" => $ecografia['reflujo_izquierdo_safena_menor'],
            "vena_izquierdo_perforantes" => $ecografia['vena_izquierdo_perforantes'],
            "medida_izquierdo_perforantes" => $ecografia['medida_izquierdo_perforantes'],
            "reflujo_izquierdo_perforantes" => $ecografia['reflujo_izquierdo_perforantes'],
            "conclusion" => $ecografia['conclusion'],
            "sugerencias" => $ecografia['sugerencias'],
        ];
        DB::table('ecografia_venosas')
           ->inser($ecografia);
    }
}
