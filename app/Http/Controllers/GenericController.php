<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenericController extends Controller{

    public function __construct(request $request) {
        
    }

    public function SubirArchivosPdf() {
	  $dir_subida = 'public/laboratorio/';
      $fichero_subido = $dir_subida.basename($paciente."-".$fecha."-".$_FILES['icono']['name']);

      move_uploaded_file($_FILES['icono']['tmp_name'], $fichero_subido);
	    $datos = array(
		  "paciente" => $paciente,
		  "titulo" => $titulo,
		  "icono" => $paciente."-".$fecha."-".$_FILES['icono']['name']
		);
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

}
