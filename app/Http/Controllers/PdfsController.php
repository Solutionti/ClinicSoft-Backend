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
      $pdf->cell(65,6, '1. DATOS GENERALES', 0, 0, 'L');
    
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
      $pdf->cell(196,6, '2. SIGNOS VITALES', 0, 0, 'L');

      $pdf->SetTextColor(0,0,0);
      $pdf->Ln(6);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'ESTATURA', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5, '172 CM', 1,'C', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'PESO', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5, '80 KG', 1,'C', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'IMC', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5, '15 IMC', 1,'C', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'TEMPERATURA', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5,utf8_decode('25 C°'), 1,'C', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, '% GRASA', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(16,5,'20%', 1,'C', false);

      $pdf->Ln(5);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'FRECUENCIA RESPIRATORIA', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5,'10 R/M', 1,'C', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'FRECUENCIA CARDIACA', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5,'20 MMHG', 1,'C', false);

      // DATOS DEL TRIAGE
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  70,  196,  6, 'F');
      $pdf->SetFont('Courier', 'B', 8);
      $pdf->SetTextColor(255,255,255);
      $pdf->cell(196,6, '2. SIGNOS VITALES', 0, 0, 'L');


      $pdf->Output();
      exit;
    }

    public function pdfFacturaAdmision() {
      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  20,  55,  6, 'F');
      $pdf->Image('https://cdn.pixabay.com/photo/2017/09/01/00/15/png-2702691_640.png', 7, 0, 30, 0, 'PNG');
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,4, '', 0,'L', false);
      $pdf->cell(10,4, 'Centro Medico Especializado', 0,'L', false);
      $pdf->Ln(3);

      $pdf->cell(20,4, '', 0,'L', false);
      $pdf->cell(10,4, 'Salud Madre & Mujer', 0,'L', false);

      $pdf->Ln(7);
      $pdf->SetFont('Courier', 'B', 8);
      $pdf->SetTextColor(255,255,255);
      $pdf->cell(196,6, 'FACTURA DE ADMISION', 0, 0, 'L');

      // DATOS PERSONALES   
      $pdf->Ln(6);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(10,4, 'FECHA', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(17,4, '2023-05-10', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(28,4, 'JERSON GALVEZ', 1,'L', false);

      $pdf->Ln(4);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(15,4, '1110542802', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(40,4, 'JERSON REINEL GALVEZ ENSUNCHO', 1,'L', false);
      $pdf->Ln(4);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,4, '           ORDEN DE ATENCION', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(15,4, '          1', 1,'C', false);
      $pdf->Ln(4);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,4, 'ESPECIALIDAD', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(35,4, 'Ecografia Transvaginal', 1,'L', false);
      $pdf->Ln(4);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,4, 'DOCTOR', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(35,4, 'CUNIA PEREZ MARLENI', 1,'L', false);

      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,46,55,6, 'F');
      $pdf->Ln(10);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(55,4, '             RECARGATE DE ENERGIA POSITIVA',1,'L', false);
      $pdf->Ln(5);
      $pdf->MultiCell(55,4, utf8_decode('Para consultar sus resultados medicos ingresar www.saludmadreymujer.com/zonac Digitar su numero de DNI y Contraseña'), 0,'L', false);
      $pdf->Ln(2);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(55,4, '                        SALUD MADRE Y MUJER', 0,'L', false);

      $pdf->Image('http://localhost/CODEIGNITER/ClinicSoft/public/img/theme/web.png', 10, 77, 20, 0, 'PNG');
      $pdf->Image('http://localhost/CODEIGNITER/ClinicSoft/public/img/theme/web.png', 47, 77, 20, 0, 'PNG');

      $pdf->Output();
      exit;
    }

    public function pdfFacturaLaboratorio() {
      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  20,  55,  6, 'F');
      $pdf->Image('https://cdn.pixabay.com/photo/2017/09/01/00/15/png-2702691_640.png', 7, 0, 30, 0, 'PNG');
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,4, '', 0,'L', false);
      $pdf->cell(10,4, 'Centro Medico Especializado', 0,'L', false);
      $pdf->Ln(3);

      $pdf->cell(20,4, '', 0,'L', false);
      $pdf->cell(10,4, 'Salud Madre & Mujer', 0,'L', false);

      $pdf->Ln(7);
      $pdf->SetFont('Courier', 'B', 8);
      $pdf->SetTextColor(255,255,255);
      $pdf->cell(196,6, 'FACTURA DE LABORATORIO', 0, 0, 'L');

      // DATOS PERSONALES   
      $pdf->Ln(6);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(10,4, 'FECHA', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(17,4, '2023-05-10', 1,'L', false);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(28,4, 'JERSON GALVEZ', 1,'L', false);

      $pdf->Ln(4);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(15,4, '1110542802', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(40,4, 'JERSON REINEL GALVEZ ENSUNCHO', 1,'L', false);
      $pdf->Ln(4);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,4, utf8_decode('           CONTRASEÑA'), 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(15,4, '   266284', 1,'C', false);
      $pdf->Ln(4);

      // $pdf->SetFont('Arial', 'B', 6);
      // $pdf->cell(20,4, 'ESPECIALIDAD', 1,'L', false);

      // $pdf->SetFont('Arial', '', 6);
      // $pdf->cell(35,4, 'Ecografia Transvaginal', 1,'L', false);
      // $pdf->Ln(4);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,4, 'DOCTOR', 1,'L', false);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(35,4, 'CUNIA PEREZ MARLENI', 1,'L', false);

      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,42,55,6, 'F');
      $pdf->Ln(10);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(55,4, '             RECARGATE DE ENERGIA POSITIVA',1,'L', false);
      $pdf->Ln(5);
      $pdf->MultiCell(55,4, utf8_decode('Para consultar sus resultados medicos ingresar www.saludmadreymujer.com/zonac Digitar su numero de DNI y Contraseña'), 0,'L', false);
      $pdf->Ln(2);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(55,4, '                        SALUD MADRE Y MUJER', 0,'L', false);

      $pdf->Image('http://localhost/CODEIGNITER/ClinicSoft/public/img/theme/web.png', 10, 77, 20, 0, 'PNG');
      $pdf->Image('http://localhost/CODEIGNITER/ClinicSoft/public/img/theme/web.png', 47, 77, 20, 0, 'PNG');

      $pdf->Output();
      exit;
    }

    public function pdfColposcopia() {
      $pdf = new Fpdf('p', 'mm', 'A4');  
    }
}
