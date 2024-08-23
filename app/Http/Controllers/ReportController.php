<?php

namespace App\Http\Controllers;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller{

    public function __construct(request $request) {
      $this->Report = new Report();
    }

    public function countPatients() {
      return $this->Report->countPatients();
    }

    public function countHistory() {
      return $this->Report->countHistory(); 
    }

    public function countPagos() {
      return $this->Report->countPagos(); 
    }

    public function CountDoctors() {
      return $this->Report->CountDoctors(); 
    }

    public function newPatients() {
      return $this->Report->newPatients(); 
    }

    public function countEfectivo() {
      return $this->Report->countEfectivo(); 
    }

    public function countTargeta() {
      return $this->Report->countTargeta(); 
    }

    public function getTransacciones() {
      return $this->Report->getTransacciones(); 
    }

    public function contarMesAMes(Request $request) {
      $fechainicial = $request->fechainicial;
      $fechafinal = $request->fechafinal;
      
      return $this->Report->contarMesAMes($fechainicial, $fechafinal); 
    }

    
}
