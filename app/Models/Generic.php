<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Generic extends Model
{
    use HasFactory;

    public function createTransaccionTraza($data) {
        $transaccion = [
          "transaccion" => $data["transaccion"],
          "fecha" => $data["fecha"],
          "hora" => $data["hora"],
          "valor" => $data["valor"],
          "usuario" => $data["usuario"],
          "tipoingreso" => $data["tipoingreso"],
        ];

        DB::table("transacciones")
          ->insert($transaccion);
    }

    public function getTransaccion() {
      $transaccion = DB::table("transacciones")
                        ->select("*")
                        ->take(10)
                        ->get();

      return $transaccion;
    }
}
