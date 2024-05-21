<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class AdmissionController extends Controller{

  public function __construct(request $request) {
    $this->Patient = new Patient();
  }

  //MODULO DE PACIENTES
  public function getPatient(Request $request) {

    $documento = $request->input("documento");
    return $this->Patient->getPatient($documento);

  }

  public function createPatient(Request $request) {
    
  }

  public function updatePatient(Request $request){

  }

  public function getClinicHistory() {

  }

  // MODULO DE ADMISIONES
  public function getAdmission() {

  }

  public function createAdmission() {

  }

  // MODULO DE TRIAGE
  public function getTriage() {
    
  }
  public function createTriage() {
    
  }

  // MODULO DE LABORATORIO
  public function getLaboratoryTable(){

  }

  public function CreateExamenLaboratory() {

  }
}
