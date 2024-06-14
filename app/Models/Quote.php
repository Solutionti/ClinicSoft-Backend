<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Quote extends Model
{
    use HasFactory;

    public function getQuotePatient() {
       $quotes = DB::table("citas")
                   ->select("*")
                   ->where()
                   ->get();
    }
}
