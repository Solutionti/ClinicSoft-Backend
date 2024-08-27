<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class History extends Model
{
    use HasFactory;

    public function createHistoriaGeneral($data) {
      $general = [
        "anamnesis" => $data["anamnesis"],
        "empresa" => $data["empresa"],
        "compania" => $data["compania"],
        "iafa" => $data["iafa"],
        "nombre_acompanante" => $data["nombre_acompanante"],
        "dni" => $data["dni"],
        "celular" => $data["celular"],
        "motivo_consulta" => $data["motivo_consulta"],
        "tratamiento_anterior" => $data["tratamiento_anterior"],
        "enfermedad_actual" => $data["enfermedad_actual"],
        "tiempo" => "",
        "inicio" => $data["inicio"],
        "curso" => $data["curso"],
        "sintomas" => $data["sintomas"],
        "cabeza" => $data["cabeza"],
        "cuello" => $data["cuello"],
        "ap_respiratoria" => $data["ap_respiratoria"],
        "ap_cardio" => $data["ap_cardio"],
        "abdomen" => $data["abdomen"],
        "ap_genitourinario" => $data["ap_genitourinario"],
        "loco_motor" => $data["loco_motor"],
        "apetito" => $data["apetito"],
        "sed" => $data["sed"],
        "orina" => $data["orina"],
        "sistema_nervioso" => $data["sistema_nervioso"],
        "examen_dx" => $data["examen_dx"],
        "procedimientos" => $data["procedimientos"],
        "tratamiento" => $data["tratamiento"],
        "plan_trabajo" => $data["plan_trabajo"],
        "referencia" => $data["referencia"],
        "proxima_cita" => $data["proxima_cita"],
        "firma_medico" => $data["firma_medico"],
        "usuario" => $data["usuario"],
      ];
      DB::table("h_consultas")
        ->insert($general);

    }

    public function createHistoriaGinecologica($data) {
      $ginecologia = [
        "familiares" => $data["familiares"],
        "patologicos" => $data["patologicos"],
        "gineco_obstetrico" => $data["gineco_obstetrico"],
        "fum" => $data["fum"],
        "rm" => $data["rm"],
        "flujo_genital" => $data["flujo_genital"],
        "no_de_parejas" => $data["no_de_parejas"],
        "gestas" => $data["gestas"],
        "partos" => $data["partos"],
        "abortos" => $data["abortos"],
        "anticonceptivos" => $data["anticonceptivos"],
        "tipo" => $data["tipo"],
        "tiempo" => $data["tiempo"],
        "cirugia_ginecologica" => $data["cirugia_ginecologica"],
        "otros" => $data["otros"],
        "fecha_pap" => $data["fecha_pap"],
        "no_hijos" => $data["no_hijos"],
        "motivo_consulta" => $data["motivo_consulta"],
        "signossintomas" => $data["signossintomas"],
        "piel_tscs" => $data["piel_tscs"],
        "tiroides" => $data["tiroides"],
        "mamas" => $data["mamas"],
        "arespiratorio" => $data["arespiratorio"],
        "acardiovascular" => $data["acardiovascular"],
        "abdomen" => $data["abdomen"],
        "genito_urinario" => $data["genito_urinario"],
        "tacto_rectal" => $data["tacto_rectal"],
        "locomotor" => $data["locomotor"],
        "sistema_nervioso" => $data["sistema_nervioso"],
        "examenes_auxiiliares" => $data["examenes_auxiiliares"],
        "plan_trabajo" => $data["plan_trabajo"],
        "tratamiento" => $data["tratamiento"],
        "proxima_cita" => $data["proxima_cita"],
        "firma_medico" => $data["firma_medico"],
        "estado" => $data["estado"],
        "usuario" => $data["usuario"],
      ];
      DB::table("h_ginecologias")
         ->insert($ginecologia);
    }

    public function subirArchivosPdf($datos) {
      $pdf = [
        "paciente" => $datos["paciente"],
        "tp_documento" => $datos["tp_documento"],
        "titulo" => $datos["titulo"],
        "url_documento" => $datos["url_documento"],
        "usuario" => $datos["usuario"],
        "fecha" => $datos["fecha"],
      ];
      DB::table("documentos_pacientes")
        ->insert($pdf);
    }

    public function countCantidadHistorias($tpconsulta, $paciente) {
      $consulta = DB::table("historial_pacientes")
                    ->where("tipo_consulta", $tpconsulta)
                    ->where("paciente", $paciente)
                    ->count();

      return $consulta;
    }

    public function createMedicamentosPaciente() {
      $medicamentos = [
        "codigo_historia" => $datos["codigo_historia"],
        "paciente" => $datos["paciente"],
        "fecha" => $datos["fecha"],
        "medicamento" => $datos["medicamento"],
        "codigo_medicamento" => $datos["codigo_medicamento"],
        "cantidad" => $datos["cantidad"],
        "dosis" => $datos["dosis"],
        "via_aplicacion" => $datos["via_aplicacion"],
        "frecuencia" => $datos["frecuencia"],
        "duracion" => $datos["duracion"],
        "autorizo" => $datos["autorizo"],
        "usuario" => $datos["usuario"],
      ];
      
      DB::table("recetas_medicas")
         ->insert($medicamentos);
    }

    public function createAlergiasPaciente(){

      $alergias = [
        "dni_paciente" => $datos["dni_paciente"],
        "tipo_alergia" => $datos["tipo_alergia"],
        "descripcion" => $datos["descripcion"],
      ];
      
      DB::table("alergias")
         ->insert($alergias);

    }
}
