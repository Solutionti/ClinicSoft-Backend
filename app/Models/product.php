<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
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
        "stock" => 0,
        "estado" => $data["estado"],
        "cantidad" => $data["cantidad"],
        "fecha" => $data["fecha"],
        "hora" => $data["hora"],
        "usuario" => $data["usuario"],
        "descripcion" => $data["descripcion"],
      ];
      
      DB::table("productos")
          ->updateOrInsert(
            [
              "codigo" => $data["codigo"],
            ],
            $products);
    }

    
    public function getInventoryProducts() {
      $inventories = DB::table("productos")
                        ->select("*")
                        ->where();

      return $inventories;
    }

}
