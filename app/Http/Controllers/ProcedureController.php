<?php

namespace App\Http\Controllers;
use App\Models\Colposcopia;
use App\Models\History;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{

    public function __construct(request $request) {
        $this->Colposcopia = new Colposcopia();
        $this->History = new History();
    }

    // MODULO DE COLPOSCOPIA
    public function getColposcopias() {
      return $this->Colposcopia->getColposcopias();
    }

    public function createColposcopia (Request $request) {
      try {
        $paciente = $request->paciente;
        $fecha = $request->fecha;
        $medico = $request->medico;
        $escamo_columnar = $request->escamo_columnar;
        $endo_cervix = $request->endo_cervix;
        $perineo = $request->perineo;
        $region_parianal = $request->region_parianal;
        $biopsia = $request->biopsia;
        $vagina = $request->vagina;
        $vulva = $request->vulva;
        $papanicolaou = $request->papanicolaou;
        $conclusiones = $request->conclusiones;
        $imagen1 = $request->imagen1;
        $imagen2 = $request->imagen2;
        $usuario = $request->usuario;
        $cmp = $request->cmp;
        
        // *************************************************
        // IMAGEN 1
        $imagen = $request->file("archivo");                        
        $nombreimagen = $imagen->getClientOriginalName();
        $ruta = public_path("colposcopia/");            
        $rutacompleta = $fecha.'-'.$paciente.'-'.$nombreimagen;
        copy($imagen->getRealPath(),$ruta.$rutacompleta);
        // **************************************************
        // IMAGEN 2
        $imagen1 = $request->file("archivo1");                        
        $nombreimagen1 = $imagen1->getClientOriginalName();
        $ruta1 = public_path("colposcopia/");            
        $rutacompleta1 = $fecha.'-'.$paciente.'-'.$nombreimagen1;
        copy($imagen1->getRealPath(),$ruta1.$rutacompleta1);
        // **************************************************
  
        $colposcopia = [
          "paciente" => $paciente,
          "fecha" => $fecha,
          "medico" => $medico,
          "escamo_columnar" => $escamo_columnar,
          "endo_cervix" => $endo_cervix,
          "perineo" => $perineo,
          "vulva" => $vulva,
          "region_parianal" => $region_parianal,
          "biopsia" => $biopsia,
          "papanicolaou" => $papanicolaou,
          "conclusiones"  => $conclusiones,
          "imagen1" => $rutacompleta,
          "imagen2" => $rutacompleta1,
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
      catch(\exception $e) {
        return response()->json([
            'status' => 400,
            'message' => $e->getMessage()
        ]);
      }
    }

    // 
    public function subirArchivosPdf(Request $request) {
    
      try {
        $paciente = $request->paciente;
        $tparchivo = $request->tparchivo;
        $titulo = $request->titulo;
        $usuario = $request->usuario;
        $fecha = date("Y-m-d");
  
        $pdf = $request->file("pdfs");                        
        $nombrepdf = $pdf->getClientOriginalName();
        $ruta = public_path("archivospdf/");            
        $rutacompleta = $fecha.'-'.$paciente.'-'.$nombrepdf;
        copy($pdf->getRealPath(),$ruta.$rutacompleta);
  
        $pdf = [
          "paciente" => $paciente,
          "tp_documento" => $tparchivo,
          "titulo" => $titulo,
          "url_documento" => $rutacompleta,
          "usuario" => $usuario,
          "fecha" => $fecha,
        ];
  
        $this->History->subirArchivosPdf($pdf);

        return response()->json([
          'message' => 'El documento se ha registrado en la base de datos',
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

    // MODULO DE ECOGRAFIAS
}
