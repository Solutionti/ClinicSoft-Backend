<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//IMPORTACION DE CONTROLADORES
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\PdfsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|JERSON GALVEZ ENSUNCHO CLINICSOFT
*/

//LOGIN APLICACION
Route::post('register', [LoginController::class, 'registerUser']); 
Route::post('login', [LoginController::class, 'login']); 

//RUTAS DE LAS LISTAS DESPLEGABLES DE LA APLICACION 
Route::controller(ListController::class)->group(function () {
  Route::get('getSpecialties', 'getSpecialties');  
  Route::get('getDoctor', 'getDoctor');  
  Route::get('getDepartaments', 'getDepartaments');  
  Route::get('getProvince', 'getProvince');  
  Route::get('getDistrict', 'getDistrict');  
  Route::get('getActivities', 'getActivities');  
  Route::get('getProducts', 'getProducts');  
  Route::get('getCategories', 'getCategories');  
  Route::get('getSex', 'getSex');  
  Route::get('getAcademics', 'getAcademics');  
  Route::get('getCivilStatus', 'getCivilStatus');  
  Route::get('getMeasures', 'getMeasures');  
  Route::get('getCurrency', 'getCurrency');  
  Route::get('getusers', 'getusers');
  Route::get('getDocumentosPdfPacientes', 'getDocumentosPdfPacientes');
  
});

// RUTAS ADMISIONES
Route::controller(AdmissionController::class)->group(function () {

  // GLOBAL
  Route::post('PasateStatusAdmission', 'PasateStatusAdmission');

  // CITAS
  Route::get('getQuotePatient', 'getQuotePatient');

  // RUTAS DE PACIENTES
  Route::get('getPatients', 'getPatients');
  Route::get('getPatientId', 'getPatientId');
  Route::post('createPatient', 'createPatient');
  Route::post('updatePatient', 'updatePatient');

  // RUTAS DE ADMISIONES
  Route::get('getAdmission', 'getAdmission');
  Route::post('createAdmission', 'createAdmission');
  Route::get('getEspecialidadCosto', 'getEspecialidadCosto');

  // TRIAGE
  Route::get('getTriageId', 'getTriageId');
  Route::post('createTriage', 'createTriage');

  //LABORATORIO
  Route::get('getLaboratoryTable', 'getLaboratoryTable');

});

// RUTAS DE INVENTARIOS
Route::controller(InventoryController::class)->group(function () {
  //PRODUCTOS 
  Route::post('createProduct', 'createProduct');

  // INVENTARIOS
  Route::get('getInventories', 'getInventories');

  //KARDEX 
  Route::get('getKardex', 'getKardex');
  Route::post('creatStart', 'creatStart');
  Route::post('createEnd', 'createEnd');
  
});

// RUTAS DE PROCEDIMIENTOS 
Route::controller(ProcedureController::class)->group(function () {
  Route::get('getColposcopias', 'getColposcopias');
  Route::post('createColposcopia', 'createColposcopia');
});

// RUTAS DE CONTABILIDAD 
Route::controller(AccountingController::class)->group(function () {
  Route::get('getPayments', 'getPayments');

});

Route::controller(PdfsController::class)->group(function () {
  Route::get('pdfHistoriaClinica', 'pdfHistoriaClinica');

});



// Route::group(['middleware' => ['auth:sanctum']], function() {
  
// });

