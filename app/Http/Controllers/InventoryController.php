<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Kardex;
use Illuminate\Http\Request;

class InventoryController extends Controller{
    
    public function __construct(request $request) {
      $this->Product = new Product(); 
      $this->Kardex = new Kardex(); 
    }

    // MODULO DE PRODUCTOS  

    public function getProductsId(Request $request) {
      $producto = $request->input("producto");
      return  $this->Product->getProductsId($producto);
    }

    public function createProduct(Request $request) {
      $categoria = $request->input("categoria");
      $nombre = $request->input("nombre");
      $codigo = $request->input("codigo");
      $barras = $request->input("barras");
      $medida = $request->input("medida");
      $cantidad = $request->input("cantidad");
      $precio_u = $request->input("precio_u");
      $moneda = $request->input("moneda");
      $descripcion = $request->input("descripcion");
      $usuario = $request->input("usuario");
      $fecha = date("Y-m-d");
      $hora = date('H:i');

      $product = [
        "categoria" => $categoria,
        "codigo" => $codigo,
        "codigo_barras" => $barras,
        "nombre" => $nombre,
        "medida" => $medida,
        "precio" => $precio_u,
        "moneda" => $moneda,
        "stock" => 0,
        "estado" => "ACTIVO",
        "descripcion" =>  $descripcion,
        "cantidad" => $cantidad,
        "fecha" => $fecha,
        "hora" => $hora,
        "usuario" => $usuario,
      ];

      $this->Product->createProduct($product);

      return response()->json([
        'message' => 'El producto se ha registrado en la base de datos',
        'status' => 200
      ]);
    }

    // INVENTARIOS

    public function getInventories(Request $request) {
      $cantidad = $request->input("cantidad");
      // $selector = $request->input("selector");

      $data = $this->Product->getInventories($cantidad);

      return response()->json([
        'data' => $data,
        'message' => 'El stock  de los productos se ha encontrado',
        'status' => 200
      ]);

    }

    public function pdfInventory() {

    }

    //MODULO DE KARDEX
    public function getKardex(Request $request) {
      $producto = $request->input("producto");
      $fechainicial = $request->input("fechainicial");
      $fechafinal = $request->input("fechafinal");

      $fechainicial = date("Y-m-d", strtotime($fechainicial));
      $fechafinal = date("Y-m-d", strtotime($fechafinal));

      return $this->Kardex->getKardex($producto,$$fechainicial,$fechafinal);
    }

    public function pdfKardex() {

    }

    public function creatStart(Request $request) {
      $producto = $request->input("producto");
      $cantidad = $request->input("cantidad");
      $stock = $request->input("stock");
      $seccion = $request->input("seccion");
      $motivo = $request->input("motivo");
      $comentarios = $request->input("comentarios");
      $devolucion = "0";
      $usuario = $request->input("usuario");
      $sede = "001";
      $fecha = date('Y-m-d');
      $hora = date('h:i');

      $entrada = [
        "id_producto" => $producto,
        "tp_documento" => "NE",
        "entrada" => $cantidad,
        "salida" => 0,
        "devolucion" => $devolucion,
        "fecha" => $fecha,
        "hora" => $hora ,
        "descripcion" => $comentarios,
        "usuario" => $usuario,
        "sede" => $sede,
        "motivo" => $motivo,
        "saldo" => 0,
      ];

      $this->Kardex->creatStartEnd($entrada);

      return response()->json([
        'message' => 'El movimiento entrada de kardex se ha creado en la base de datos',
        'status' => 200
      ]);
    }
    
    public function createEnd(Request $request) {
      $producto = $request->input("producto");
      $cantidad = $request->input("cantidad");
      $stock = $request->input("stock");
      $seccion = $request->input("seccion");
      $motivo = $request->input("motivo");
      $comentarios = $request->input("comentarios");
      $usuario = $request->input("usuario");
      $devolucion = "0";
      $sede = "001";
      $fecha = date('Y-m-d');
      $hora = date('h:i');

      $entrada = [
        "id_producto" => $producto,
        "tp_documento" => "FO",
        "entrada" => 0,
        "salida" => $cantidad,
        "devolucion" => $devolucion,
        "fecha" => $fecha,
        "hora" => $hora,
        "descripcion" => $comentarios,
        "usuario" => $usuario,
        "sede" => $sede,
        "motivo" => $motivo,
        "saldo" => 0,
      ];

      $this->Kardex->creatStartEnd($entrada);

      return response()->json([
        'message' => 'El movimiento salida de kardex se ha creado en la base de datos',
        'status' => 200
      ]);
    }
}
