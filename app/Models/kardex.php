<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD

=======
>>>>>>> c7f8e529c982d7d1691bbfc4729c9ddd77cdac2e
class kardex extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function getKardex($product) {
      $kadexs = DB::table("productos")
                    ->select("*")
                    ->where("id", $product)
=======
    public function getKardex($product,$fechaInicial,$fechaFinal) {
      $kadexs = DB::table('kardex')
                    ->select('*')
                    ->where('fecha','>=', $fechaInicial)
                    ->where('fecha','<=', $fechaFinal)
                    ->where('id_producto', $product)
>>>>>>> c7f8e529c982d7d1691bbfc4729c9ddd77cdac2e
                    ->get();

        return $kadexs;
    }


    public function creatStartEnd($data) {
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
