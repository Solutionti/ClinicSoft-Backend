<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Quote extends Model
{
    use HasFactory;

    public function getQuotePatient($documento) {
       $fecha = date("Y-m-d");
       $quotes = DB::table("citas")
                   ->select("*")
                   ->where("documento", $documento)
                   ->where("fecha", '>=', $fecha)
                   ->orderByDesc('codigo_cita')
                   ->first();

       return $quotes;
    }
}
