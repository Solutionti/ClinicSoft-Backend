<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function getProducts() {
      $products = DB::table("productos")
                    ->select("*")
                    ->get();

      return $products;
    }

    public function getProductsId($codigo) {
      $product = DB::table("productos")
                      ->select("*")
                      ->where("codigo", $codigo)
                      ->get()
                      ->first();

       return $product;
    }

    public function createProduct($data) {
      $products = [
        "categoria" => $data["categoria"],
        "codigo" => $data["codigo"],
        "codigo_barras" => $data["codigo_barras"],
        "nombre" => $data["nombre"],
        "medida" => $data["medida"],
        "precio" => $data["precio"],
        "moneda" => $data["moneda"],
        "stock" => $data["descripcion"],
        "estado" => $data["estado"],
        "cantidad" => $data["cantidad"],
        "fecha" => $data["fecha"],
        "hora" => $data["hora"],
        "usuario" => $data["usuario"],
      ];
      
      DB::table("productos")
          ->insert($products);
    }

    public function updateProduct() {
        $products = [
            "categoria" => $data["categoria"],
            "codigo" => $data["codigo"],
            "codigo_barras" => $data["codigo_barras"],
            "nombre" => $data["nombre"],
            "medida" => $data["medida"],
            "precio" => $data["precio"],
            "moneda" => $data["moneda"],
            "stock" => $data["descripcion"],
            "estado" => $data["estado"],
            "cantidad" => $data["cantidad"],
            "fecha" => $data["fecha"],
            "hora" => $data["hora"],
            "usuario" => $data["usuario"],
          ];
          
          DB::table("productos")
              ->update($products);
    }

    public function getInventoryProducts() {
      $inventories = DB::table("prodcutos")
                        ->select("*")
                        ->where();

      return $inventories;
    }

}
