<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kardex extends Model
{
    use HasFactory;

    public function getKardex($product,$fechaInicial,$fechaFinal) {
      $kadexs = DB::table("productos")
                    ->select("*")
                    ->where("id_producto", $product)
                    ->where("fecha >", $fechaInicial)
                    ->where("fecha <=", $fechaFinal)
                    ->get();

        return $kadexs;
    }


    public function CreatstartEnd($data) {
      $kadexs = [
        "id_producto" => $data["id_producto"],
        "tp_documento" => $data["tp_documento"],
        "entrada" => $data["entrada"],
        "salida" => $data["salida"],
        "devolucion" => $data["devolucion"],
        "fecha" => $data["fecha"],
        "hora" => $data["hora"],
        "descripcion" => $data["descripcion"],
        "usuario" => $data["usuario"],
        "sede" => $data["sede"],
        "motivo" => $data["motivo"],
        "saldo" => $data["saldo"],
      ];

      DB::table("kardex")
          ->insert($kadexs);
    }

}
