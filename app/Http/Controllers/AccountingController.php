<?php

namespace App\Http\Controllers;
use App\Models\payment;

use Illuminate\Http\Request;
class AccountingController extends Controller{
    
    public function __construct(request $request) {
        $this->Payment = new Payment();
    }
    // PAGOS 
    public function getPayments() {
      return $this->Payment->getPayments();
    }

    // GASTOS
    public function getGasto(){
        
    }
    public function createGasto(){

    }

    public function updateGasto(){
        
    }

    // FINANZAS
    public function getEspeciality() {

    }

    public function getLaboratory() {
        
    }
}
