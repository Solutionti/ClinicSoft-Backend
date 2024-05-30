<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//IMPORTACION DE CONTROLADORES
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\AdmissionController;

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
});

// RUTAS ADMISIONES
Route::controller(AdmissionController::class)->group(function () {
  // RUTAS DE PACIENTES
  Route::get('getPatients', 'getPatients');
  Route::get('getPatientId', 'getPatientId');
  Route::post('createPatient', 'createPatient');
  Route::post('updatePatient', 'updatePatient');

  // RUTAS DE ADMISIONES
  Route::get('getAdmission', 'getAdmission');
  Route::post('createAdmission', 'createAdmission');
  Route::get('getEspecialidadCosto', 'getEspecialidadCosto');

  //
  Route::get('getProducts', 'getProducts');
  Route::post('createProduct', 'createProduct');
  
});

Route::group(['middleware' => ['auth:sanctum']], function() {
  
});

