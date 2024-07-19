<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//IMPORTACION DE CONTROLADORES
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\GenericController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PdfsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|JERSON GALVEZ ENSUNCHO CLINICSOFT
*/

//LOGIN APLICACION
Route::post('register', [LoginController::class, 'registerUser']);
Route::get('getUsers', [LoginController::class, 'getUsers']);

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
  Route::get('getUsersAll', 'getUsersAll');
  Route::get('getDocumentosPdfPacientes', 'getDocumentosPdfPacientes');
});

Route::controller(GenericController::class)->group(function () {
  Route::post('createTransaccionTraza', 'createTransaccionTraza');
  Route::get('getTransaccion', 'getTransaccion');

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
  Route::post('CreateExamenLaboratory', 'CreateExamenLaboratory');

  // 
  Route::post('createHistoriaClinica', 'createHistoriaClinica');

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

  Route::post('subirArchivosPdf', 'subirArchivosPdf');


});

// RUTAS DE CONTABILIDAD
Route::controller(AccountingController::class)->group(function () {

  Route::get('getPayments', 'getPayments');
  Route::get('getGasto', 'getGasto');
  Route::post('createGasto', 'createGasto');
  Route::post('CreateEspeciality', 'CreateEspeciality');
  Route::post('CreateLaboratory', 'CreateLaboratory');

});

Route::controller(ReportController::class)->group(function () {
  Route::get('countPatients', 'countPatients');
  Route::get('countHistory', 'countHistory');
  Route::get('countPagos', 'countPagos');
  Route::get('CountDoctors', 'CountDoctors');
  Route::get('newPatients', 'newPatients');

  Route::get('countEfectivo', 'countEfectivo');
  Route::get('countTargeta', 'countTargeta');
  Route::get('getTransacciones', 'getTransacciones');

});

Route::controller(PdfsController::class)->group(function () {
  Route::get('pdfHistoriaClinica', 'pdfHistoriaClinica');
  Route::get('pdfFacturaAdmision', 'pdfFacturaAdmision');
  Route::get('pdfFacturaLaboratorio', 'pdfFacturaLaboratorio');
  Route::get('pdfColposcopia', 'pdfColposcopia');
  Route::get('pdfKardex', 'pdfKardex');
  Route::get('pdfInventario', 'pdfInventario');
  Route::get('pdfCaja', 'pdfCaja');
  Route::get('pdfGastos', 'pdfGastos');
  Route::get('pdfLaboratorio', 'pdfLaboratorio');
  Route::get('pdfPagos', 'pdfPagos');
});



// Route::group(['middleware' => ['auth:sanctum']], function() {

// });

