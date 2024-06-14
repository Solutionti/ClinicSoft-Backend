<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Payment extends Model
{
    use HasFactory;

    public function getPayments() {
      $payments = DB::table("pagos")
                    ->select("*")
                    ->get();

      return  $payments;
    }
}
