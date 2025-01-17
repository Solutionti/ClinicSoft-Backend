<?php


namespace App\Http\Controllers;

use App\Models\ListModel;
use Illuminate\Http\Request;

class ListController extends Controller {

    public function __construct(request $request) {
      $this->ListModel = new ListModel();
    }

    public function getSpecialties() {
      return $this->ListModel->getSpecialties();
    }

    public function getDoctor() {
      return $this->ListModel->getDoctor();
    }

    public function getDepartaments() {
      return $this->ListModel->getDepartaments();
    }

    public function getProvince(Request $request) {
      $departamento = $request->input("departamento");

      return $this->ListModel->getProvince($departamento);
    }

    public function getDistrict(Request $request) {
      $departamento = $request->departamento;
      $provincia = $request->provincia;

      return $this->ListModel->getDistrict($provincia, $departamento);
    }

    public function getActivities() {
      //pendiente por crear tabla
    }

    public function getProducts() {
      return $this->ListModel->getProducts();

    }

    public function getCategories() {
      return $this->ListModel->getCategories();
    }

    public function getUsersAll() {
      return $this->ListModel->getUsersAll();
    }


    // LISTAS QUEMADAS EN EL CODIGO
    public function getSex(){
      $sex = array(
        array(
          "codigo" => "M",
          "descripcion" => "Masculino"
        ),
        array(
          "codigo" => "F",
          "descripcion" => "Femenino"
        ),
        array(
          "codigo" => "O",
          "descripcion" => "Otro"
        ),
      );

      return $sex;
    }

    public function getAcademics() {
      $academic = array(
        array(
          "codigo" => "K",
          "descripcion" => "Kinder"
        ),
        array(
          "codigo" => "PE",
          "descripcion" => "Pre Escolar"
        ),
        array(
          "codigo" => "A",
          "descripcion" => "Analfabeto"
        ),
        array(
          "codigo" => "P",
          "descripcion" => "Primaria"
        ),
        array(
          "codigo" => "SD",
          "descripcion" => "Segundaria"
        ),
        array(
          "codigo" => "S",
          "descripcion" => "Superior"
        ),
      );

      return $academic;
    }

    public function getCivilStatus() {
      $civilStatus = array(
        array(
          "codigo" => "S",
          "descripcion" => "Soltero(a)"
        ),
        array(
          "codigo" => "C",
          "descripcion" => "Casado(a)"
        ),
        array(
          "codigo" => "V",
          "descripcion" => "Viudo(a)"
        ),
        array(
          "codigo" => "CV",
          "descripcion" => "Conviviente(a)"
        ),
        array(
          "codigo" => "D",
          "descripcion" => "Divorciado(a)"
        ),
        array(
          "codigo" => "O",
          "descripcion" => "Otro(a)"
        ),
      );

      return $civilStatus;
    }

    public function getCurrency() {
      $curreny = array(
        array(
          "codigo" => "PEN",
          "descripcion" => "Soles ( /S )",
        ),
        array(
          "codigo" => "COP",
          "descripcion" => "Pesos ( COP )",
        ),
        array(
          "codigo" => "USD",
          "descripcion" => "Dolares ( USD )",
        ),
      );

      return $curreny;
    }

    public function getusers() {
      $user = array(
        array(
          "codigo" => "A",
          "descripcion" => "Administrador",
        ),
        array(
          "codigo" => "E",
          "descripcion" => "Enfermera",
        ),
        array(
          "codigo" => "D",
          "descripcion" => "Doctor",
        ),
        array(
          "codigo" => "L",
          "descripcion" => "Laboratorista",
        ),
        array(
          "codigo" => "P",
          "descripcion" => "patologo",
        ),

      );

      return $user;
    }

    public function getDocumentosPdfPacientes(Request $request) {
      $paciente = $request->input("paciente");

      return $this->ListModel->getDocumentosPdfPacientes($paciente);
    }

    public function getDiagnosticos() {
      return $this->ListModel->getDiagnosticos();
    }

    public function getProcedimientos() {
      return $this->ListModel->getProcedimientos();
    }

    public function getDocumentosPaciente(Request $request) {
      $paciente = $request->input("paciente");

      return $this->ListModel->getDocumentosPaciente($paciente);
    }

}
