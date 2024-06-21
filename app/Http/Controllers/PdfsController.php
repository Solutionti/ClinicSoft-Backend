<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class PdfsController extends Controller
{

    public function __construct(request $request) {
    }

    public function pdfHistoriaClinica() {
      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  40,  196,  6, 'F');
      $pdf->Image('https://png.pngtree.com/template/20190530/ourmid/pngtree-bird-logo-vector-image_204552.jpg', 10, 5, 30, 0, 'JPG');
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->cell(128,5, '', 0,'L', false);
      $pdf->cell(40,5, 'ORDEN DE INTERCONSULTA MEDICA', 0,'L', false);
      $pdf->Ln(5);
      $pdf->cell(128,5, '', 0,'L', false);
      $pdf->cell(40,5, 'HISTORIA CLINICA DEL PACIENTE', 0,'L', false);

      $pdf->Ln(10);
      $pdf->SetFont('Courier', 'B', 8);
      $pdf->SetTextColor(255,255,255);
      $pdf->cell(196,6, '1. DATOS GENERALES', 0, 0, 'L');

      // DATOS PERSONALES
      $pdf->Ln(6);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'APELLIDOS Y NOMBRES', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(100,5, 'JERSON REINEL GALVEZ ENSUNCHO', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(10,5, 'HC', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(46,5, '1110542802', 1,'L', false);

      $pdf->Ln(5);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'DNI', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(30,5, '1110542802', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(10,5, 'EDAD', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(10,5, '120', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'SEXO', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5, 'HOMBRE', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'TELEFONO', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(46,5, '3155639791  -  2666087', 1,'L', false);

      $pdf->Ln(5);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'DIRECCION', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(45,5, 'AVENIDA LOS OCOBOS 145', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'DEPARTAMENTO', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5, 'MADRE DE DIOS', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(15,5, 'PROVINCIA', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5, 'MADRE DE DIOS', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(15,5, 'DISTRITO', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(21,5, 'MADRE DE DIOS', 1,'L', false);

      $pdf->Ln(5);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'OCUPACION', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(100,5, 'INGENIERO DE SISTEMAS ', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'ESTADO CIVIL', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(36,5, 'SOLTERO', 1,'L', false);
      $pdf->Ln(9);

      // DATOS DEL TRIAGE
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  70,  196,  6, 'F');
      $pdf->SetFont('Courier', 'B', 8);
      $pdf->SetTextColor(255,255,255);
      $pdf->cell(196,6, '2. DATOS DEL TRIGE', 0, 0, 'L');

      $pdf->Output();
      exit;
    }

    public function pdfColposcopia() {
      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  40,  196,  6, 'F');
      $pdf->Image('https://png.pngtree.com/template/20190530/ourmid/pngtree-bird-logo-vector-image_204552.jpg', 10, 5, 30, 0, 'JPG');
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->cell(128,5, '', 0,'L', false);
      $pdf->cell(40,5, 'ORDEN DE INTERCONSULTA MEDICA', 0,'L', false);
      $pdf->Ln(5);
      $pdf->cell(128,5, '', 0,'L', false);
      $pdf->cell(40,5, 'INFORME DE COLPOSCOPIA', 0,'L', false);

      $pdf->Ln(10);
      $pdf->SetFont('Courier', 'B', 8);
      $pdf->SetTextColor(255,255,255);
      $pdf->cell(196,6, '1. DATOS GENERALES', 0, 0, 'L');

      // DATOS PERSONALES
      $pdf->Ln(6);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'APELLIDOS Y NOMBRES', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(100,5, 'JERSON REINEL GALVEZ ENSUNCHO', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(10,5, 'HC', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(46,5, '1110542802', 1,'L', false);

      $pdf->Ln(5);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'DNI', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(30,5, '1110542802', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(10,5, 'EDAD', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(10,5, '120', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'SEXO', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5, 'HOMBRE', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'TELEFONO', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(46,5, '3155639791  -  2666087', 1,'L', false);

      $pdf->Ln(5);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'DIRECCION', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(45,5, 'AVENIDA LOS OCOBOS 145', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'DEPARTAMENTO', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5, 'MADRE DE DIOS', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(15,5, 'PROVINCIA', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5, 'MADRE DE DIOS', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(15,5, 'DISTRITO', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(21,5, 'MADRE DE DIOS', 1,'L', false);

      $pdf->Ln(5);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'OCUPACION', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(100,5, 'INGENIERO DE SISTEMAS ', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'ESTADO CIVIL', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(36,5, 'SOLTERO', 1,'L', false);
      $pdf->Ln(9);

      //CONTENIDO DE LA COLPOSCOPIA

      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  70,  196,  6, 'F');
      $pdf->SetFont('Courier', 'B', 8);
      $pdf->SetTextColor(255,255,255);
      $pdf->cell(196,6, '2. DATOS DE LA COLPOSCOPIA', 0, 0, 'L');

      $pdf->Ln(6);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'U. Escamo Columnar', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'Pultillado', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Endo Cervix', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'Mosaico', 1,'L', false);

      $pdf->Ln(5);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Vagina', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'Flujo', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Vulva', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'Nevus', 1,'L', false);

      $pdf->Ln(5);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Perineo', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'Condiloma', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Region Parianal', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'Sin Lesiones', 1,'L', false);

      $pdf->Ln(5);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Biopsia', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'Vulva', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Papanicolaou', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'Si', 1,'L', false);


      $pdf->Image('https://viajareacolombia.com/wp-content/uploads/2020/07/2_ibague.jpg', 20 , 110, 70, 40, 'JPG');
      $pdf->Image('https://viajareacolombia.com/wp-content/uploads/2020/07/2_ibague.jpg', 120, 110, 70, 40, 'JPG');

      $pdf->Ln(70);
      $pdf->SetFont('Arial', 'B', 8);
      $pdf->cell(58,5, 'CONCLUSIONES', 0,'L', false);

      $pdf->Ln(5);
      $pdf->SetFont('Arial', '', 8);
      $pdf->MultiCell(196, 5,'SE HACE UNA COLPOSPOCAPIA PARA PRUEBAS ', 0, 'L', false);

      $pdf->Ln(70);
      $pdf->SetFont('Arial', 'B', 8);
      $pdf->cell(20,5, '', 0,'L', false);
      $pdf->cell(90,5, '________________________________', 0,'L', false);
      $pdf->cell(20,5, '________________________________', 0,'L', false);


      $pdf->Ln(5);
      $pdf->SetFont('Arial', '', 8);
      $pdf->cell(20,5, '', 0,'L', false);
      $pdf->cell(90,5, 'CRISTIAN CAMILO', 0,'L', false);
      $pdf->cell(58,5, 'CHAPATIN', 0,'L', false);

      $pdf->Ln(5);
      $pdf->SetFont('Arial', 'B', 8);
      $pdf->cell(20,5, '', 0,'L', false);
      $pdf->cell(90,5, 'FIRMA PACIENTE', 0,'L', false);
      $pdf->MultiCell(196, 5,'FIRMA DOCTOR', 0, 'L', false);

      $pdf->Output();
      exit;
    }

    public function pdfKardex() {
      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->Image('https://png.pngtree.com/template/20190530/ourmid/pngtree-bird-logo-vector-image_204552.jpg', 10, 5, 30, 0, 'JPG');
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->cell(128,5, '', 0,'L', false);
      $pdf->cell(40,5, 'CENTRO MEDICO ESPECIALIZADO', 0,'L', false);
      $pdf->Ln(5);
      $pdf->cell(128,5, '', 0,'L', false);
      $pdf->cell(40,5, 'INFORME MOVIMIENTO DE KARDEX', 0,'L', false);


      $pdf->Ln(20);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'FECHA', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'CONSULTA 2023-12-17', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'RESPONSABLE', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'JERSON GALVEZ ENSUNCHO', 1,'L', false);


      $pdf->Ln(10);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(196,5, 'MOVIMIENTOS DE KARDEX DEL PRODUCTO CATETER NA 24', 0,'L', false);


      $pdf->Output();
      exit;
    }

    public function pdfInventario() {
      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->Image('https://png.pngtree.com/template/20190530/ourmid/pngtree-bird-logo-vector-image_204552.jpg', 10, 5, 30, 0, 'JPG');
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->cell(128,5, '', 0,'L', false);
      $pdf->cell(40,5, 'CENTRO MEDICO ESPECIALIZADO', 0,'L', false);
      $pdf->Ln(5);
      $pdf->cell(128,5, '', 0,'L', false);
      $pdf->cell(40,5, 'INFORME DE EXISTENCIA DE INVENTARIO', 0,'L', false);

      $pdf->Ln(20);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'FECHA', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'CONSULTA 2023-12-17', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'RESPONSABLE', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'JERSON GALVEZ ENSUNCHO', 1,'L', false);

      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(196,5, 'CONSULTA DE INVENTARIO DE FECHA 17-06-2024', 0,'L', false);


      $pdf->Ln(10);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(20,5, 'ID', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(66,5, 'PRODUCTO', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'PRECIO', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'STOCK', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(30,5, 'ESTADO', 1,'L', false);

      $pdf->Ln(5);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(20,5, '10', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(66,5, 'MIDAZOLAM 50MG/10ML', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(40,5, '20.000', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(40,5, '30', 1,'L', false);

      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(30,5, 'ACTIVO', 1,'L', false);






      $pdf->Output();
      exit;

    }
}
