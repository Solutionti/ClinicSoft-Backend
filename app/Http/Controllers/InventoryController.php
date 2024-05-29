<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller{
    
    public function __construct(request $request) {
      $this->Product = new Product(); 
    }

    // MODULO DE PRODUCTOS  
    public function getProducts() {
      return  $this->Product->getProducts();
    }

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
    }

    public function updateProduct() {

    }

    // INVENTARIOS

    public function getInventories() {

    }

    public function pdfInventory() {

    }

    //MODULO DE KARDEX
    public function getKardex() {

    }

    public function pdfKardex() {

    }

    public function Creatstart() {

    }

    public function createEnd() {
        
    }
}
