<?php

namespace App\Http\Controllers;
use App\Models\Generic;
use Illuminate\Http\Request;

class GenericController extends Controller{

    public function __construct(request $request) {
      $this->Generic = new Generic();
    }

    public function SubirArchivosPdf() {
	  $dir_subida = 'public/laboratorio/';
      $fichero_subido = $dir_subida.basename($paciente."-".$fecha."-".$_FILES['icono']['name']);
      move_uploaded_file($_FILES['icono']['tmp_name'], $fichero_subido);
    }
    
    public function SubirArchivosImagenes() {
      $dir_subida = 'public/colposcopia/';
      $fichero_subido = $dir_subida.basename($_FILES['imagen1']['name']);
      move_uploaded_file($_FILES['imagen1']['tmp_name'], $fichero_subido);
    }

    public function createTransaccionTraza(Request $request) {
      $transaccion = $request->input("transaccion");
      $fecha = date("Y-m-d");
      $hora = date("h: i");
      $valor = $request->input("valor");
      $usuario = $request->input("usuario");
      $tipoingreso = $request->input("tipoingreso");

      $transaccion = [
        "transaccion" => $transaccion,
        "fecha" => $fecha,
        "hora" => $hora,
        "valor" => $valor,
        "usuario" => $usuario,
        "tipoingreso" => $tipoingreso,
      ];

      $this->Generic->createTransaccionTraza($transaccion);
    }

    public function getTransaccion() {
      return $this->Generic->getTransaccion();
    }

}
