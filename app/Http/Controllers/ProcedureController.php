<?php

namespace App\Http\Controllers;
use App\Models\Colposcopia;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{

    public function __construct(request $request) {
        $this->Colposcopia = new Colposcopia();
    }

    // MODULO DE COLPOSCOPIA
    public function getColposcopias() {
      return $this->Colposcopia->getColposcopias();
    }

    public function createColposcopia (Request $request) {
      $paciente = $request->input("paciente");
      $fecha = $request->input("fecha");
      $medico = $request->input("medico");
      $escamo_columnar = $request->input("escamo_columnar");
      $endo_cervix = $request->input("endo_cervix");
      $perineo = $request->input("perineo");
      $region_parianal = $request->input("region_parianal");
      $biopsia = $request->input("biopsia");
      $vagina = $request->input("vagina");
      $papanicolaou = $request->input("papanicolaou");
      $conclusiones = $request->input("conclusiones");
      $imagen1 = $request->input("imagen1");
      $imagen2 = $request->input("imagen2");
      $usuario = $request->input("usuario");
      $cmp = $request->input("cmp");

      $colposcopia = [
        "paciente" => $paciente,
        "fecha" => $fecha,
        "medico" => $medico,
        "escamo_columnar" => $escamo_columnar,
        "endo_cervix" => $endo_cervix,
        "perineo" => $perineo,
        "region_parianal" => $region_parianal,
        "biopsia" => $biopsia,
        "papanicolaou" => $papanicolaou,
        "conclusiones"  => $conclusiones,
        "imagen1" => $imagen1,
        "imagen2" => $imagen2,
        "usuario" => $usuario,
        "vagina" => $vagina,
        "cmp" => $cmp,
      ];
      $this->Colposcopia->createColposcopia($colposcopia);

      return response()->json([
        'message' => 'la colposcopia se ha registrado en la base de datos',
        'status' => 200
      ]);
    }

    // MODULO DE ECOGRAFIAS
}
