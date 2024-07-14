<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class History extends Model
{
    use HasFactory;

    public function createHistoriaGeneral() {
      $general = [
        ""
      ];
      
    }

    public function createHistoriaGinecologica() {

    }
}
