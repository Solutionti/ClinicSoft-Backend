<?php

namespace App\Http\Controllers;
use App\Models\Pdf;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class PdfsController extends Controller
{

    public function __construct() {
      $this->Pdf = new Pdf();
    }

    public function pdfHistoriaClinica(Request $request) {
      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  40,  196,  6, 'F');
      // $pdf->Image('https://cdn.pixabay.com/photo/2017/09/01/00/15/png-2702691_640.png', 10, 5, 30, 0, 'PNG');
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

    public function pdfFacturaAdmision(Request $request) {
      $admision = $request->admision;

      $empresa = $this->Pdf->getEmpresa("1");
      $admisiones = $this->Pdf->pdfFacturaAdmision($admision);

      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  20,  55,  6, 'F');
      $pdf->Image($empresa[0]->logo, 10, 6, 13, 0, 'PNG');
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,4, '', 0);
      $pdf->cell(10,4, $empresa[0]->texto2, 0);
      $pdf->Ln(3);
      $pdf->cell(20,4, '', 0);
      $pdf->cell(10,4, $empresa[0]->nombre, 0);
      $pdf->Ln(7);
      $pdf->SetFont('Courier', 'B', 8);
      $pdf->SetTextColor(255,255,255);
      $pdf->cell(196,6, 'FACTURA DE ADMISION', 0, 0, 'L');
      // DATOS PERSONALES
      $pdf->Ln(6);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(10,4, 'FECHA', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(17,4, $admisiones[0]->fecha, 1);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(28,4, "USUARIO ATENCION", 1);
      $pdf->Ln(4);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(15,4, $admisiones[0]->paciente, 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(40,4, $admisiones[0]->nombre .' '. $admisiones[0]->apellido, 1);
      $pdf->Ln(4);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,4, '           ORDEN DE ATENCION', 1);
      $pdf->SetFont('Arial', '', 8);
      $pdf->cell(15,4, '          '. $admisiones[0]->turno, 1);
      $pdf->Ln(4);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,4, 'ESPECIALIDAD', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(35,4, utf8_decode($admisiones[0]->descripcion), 1);
      $pdf->Ln(4);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,4, 'DOCTOR', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(35,4, $admisiones[0]->doctor, 1);
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,46,55,6, 'F');
      $pdf->Ln(10);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(55,4, '             RECARGATE DE ENERGIA POSITIVA',1,'L', false);
      $pdf->Ln(3);
      $pdf->MultiCell(55,4, utf8_decode($empresa[0]->texto1), 0,'L', false);
      $pdf->Image($empresa[0]->qr, 10, 72, 17, 0, 'PNG');
      $pdf->Image($empresa[0]->qr, 50, 72, 17, 0, 'PNG');
      $pdf->Output();
      exit;
    }

    public function pdfFacturaLaboratorio(Request $request) {
      $codigo = "25";
      $paciente = "1110542802";
      $empresa = $this->Pdf->getEmpresa("1");
      $laboratorio = $this->Pdf->pdfFacturaLaboratorio($codigo, $paciente);
     
      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  20,  55,  6, 'F');
      $pdf->Image($empresa[0]->logo, 10, 6, 13, 0, 'PNG');
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,4, '', 0);
      $pdf->cell(10,4, $empresa[0]->texto2, 0);
      $pdf->Ln(3);

      $pdf->cell(20,4, '', 0);
      $pdf->cell(10,4, $empresa[0]->nombre, 0);

      $pdf->Ln(7);
      $pdf->SetFont('Courier', 'B', 8);
      $pdf->SetTextColor(255,255,255);
      $pdf->cell(196,6, 'FACTURA DE LABORATORIO', 0);

      // DATOS PERSONALES
      $pdf->Ln(6);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(10,4, 'FECHA', 1);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(17,4, $laboratorio[0]->fecha, 1);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(28,4, "USUARIO ATENCION", 1);

      $pdf->Ln(4);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(15,4, $laboratorio[0]->dni_paciente, 1);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(40,4, $laboratorio[0]->nombre . " " .$laboratorio[0]->apellido , 1);
      $pdf->Ln(4);

      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,4, utf8_decode('           CONTRASEÑA'), 1);

      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(15,4, '   ' .$laboratorio[0]->password, 1);
      $pdf->Ln(4);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,4, 'DOCTOR', 1,);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(35,4, $laboratorio[0]->doctor, 1);
      $pdf->Ln(4);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(55,4, '-laboatorio', 1);

      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,46,55,6, 'F');
      $pdf->Ln(10);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(55,4, '             RECARGATE DE ENERGIA POSITIVA',1,'L', false);
      $pdf->Ln(3);
      $pdf->MultiCell(55,4, utf8_decode($empresa[0]->texto1), 0,'L', false);
      $pdf->Ln(2);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->Image($empresa[0]->qr, 10, 72, 17, 0, 'PNG');
      $pdf->Image($empresa[0]->qr, 50, 72, 17, 0, 'PNG');

      $pdf->Output();
      exit;
    }

    public function pdfColposcopia(Request $request) {

      $empresa = $this->Pdf->getEmpresa("1");
      $colposcopias = $this->Pdf->pdfColposcopia(6);
      
      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  40,  196,  6, 'F');
      $pdf->Image($empresa[0]->logo, 10, 12, 25, 0, 'PNG');
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->cell(128,5, '', 0);
      $pdf->cell(40,5, 'ORDEN DE INTERCONSULTA MEDICA', 0);
      $pdf->Ln(5);
      $pdf->cell(128,5, '', 0);
      $pdf->cell(40,5, 'INFORME DE COLPOSCOPIA', 0);
      $pdf->Ln(10);
      $pdf->SetFont('Courier', 'B', 8);
      $pdf->SetTextColor(255,255,255);
      $pdf->cell(196,6, '1. DATOS GENERALES', 0);
      // DATOS PERSONALES
      $pdf->Ln(6);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'APELLIDOS Y NOMBRES', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(100,5, $colposcopias[0]->nombre.' '.$colposcopias[0]->apellido, 1);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(10,5, 'HC', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(46,5, $colposcopias[0]->hc, 1);
      $pdf->Ln(5);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'DNI', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(30,5, $colposcopias[0]->documento, 1);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(10,5, 'EDAD', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(10,5, $colposcopias[0]->edad, 1);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'SEXO', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5, $colposcopias[0]->sexo, 1);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'TELEFONO', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(46,5, $colposcopias[0]->telefono, 1);
      $pdf->Ln(5);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'DIRECCION', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(45,5, $colposcopias[0]->direccion, 1);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'DEPARTAMENTO', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5, 'MADRE DE DIOS', 1);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(15,5, 'PROVINCIA', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(20,5, 'MADRE DE DIOS', 1);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(15,5, 'DISTRITO', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(21,5, 'MADRE DE DIOS', 1);
      $pdf->Ln(5);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(40,5, 'OCUPACION', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(100,5, $colposcopias[0]->ocupacion, 1);
      $pdf->SetFont('Arial', 'B', 6);
      $pdf->cell(20,5, 'ESTADO CIVIL', 1);
      $pdf->SetFont('Arial', '', 6);
      $pdf->cell(36,5, $colposcopias[0]->estado_civil, 1);
      $pdf->Ln(9);
      //CONTENIDO DE LA COLPOSCOPIA
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  70,  196,  6, 'F');
      $pdf->SetFont('Courier', 'B', 8);
      $pdf->SetTextColor(255,255,255);
      $pdf->cell(196,6, '2. DATOS DE LA COLPOSCOPIA', 0);
      $pdf->Ln(6);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'U. Escamo Columnar', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, $colposcopias[0]->escamo_columnar, 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Endo Cervix', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, $colposcopias[0]->endo_cervix, 1);
      $pdf->Ln(5);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Vagina', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, $colposcopias[0]->vagina, 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Vulva', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, $colposcopias[0]->vulva, 1);
      $pdf->Ln(5);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Perineo', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, $colposcopias[0]->perineo, 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Region Parianal', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, $colposcopias[0]->region_Parianal, 1);
      $pdf->Ln(5);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Biopsia', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, $colposcopias[0]->biopsia, 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'Papanicolaou', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, $colposcopias[0]->papanicolaou, 1);
      $pdf->Image('https://viajareacolombia.com/wp-content/uploads/2020/07/2_ibague.jpg', 20 , 110, 70, 40);
      $pdf->Image('https://viajareacolombia.com/wp-content/uploads/2020/07/2_ibague.jpg', 120, 110, 70, 40);
      $pdf->Ln(70);
      $pdf->SetFont('Arial', 'B', 8);
      $pdf->cell(58,5, 'CONCLUSIONES', 0);
      $pdf->Ln(5);
      $pdf->SetFont('Arial', '', 8);
      $pdf->MultiCell(200, 5,utf8_decode($colposcopias[0]->conclusiones), 0);
      $pdf->Ln(70);
      $pdf->SetFont('Arial', 'B', 8);
      $pdf->cell(20,5, '', 0);
      $pdf->cell(90,5, '________________________________', 0);
      $pdf->cell(20,5, '________________________________', 0);
      $pdf->Ln(5);
      $pdf->SetFont('Arial', '', 8);
      $pdf->cell(20,5, '', 0);
      $pdf->cell(90,5, utf8_decode($colposcopias[0]->nombre.' '.$colposcopias[0]->apellido), 0);
      $pdf->cell(58,5, utf8_decode($colposcopias[0]->medico), 0);
      $pdf->Ln(5);
      $pdf->SetFont('Arial', 'B', 8);
      $pdf->cell(20,5, '', 0);
      $pdf->cell(90,5, 'FIRMA PACIENTE', 0);
      $pdf->MultiCell(196, 5,'FIRMA DOCTOR', 0);

      $pdf->Output();
      exit;
    }

    public function pdfKardex(Request $request) {
      $empresa = $this->Pdf->getEmpresa("1");
      $kardex = $this->Pdf->pdfKardex(1, "2022-04-22", "2022-04-22");

      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  44,  196,  6, 'F');
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  64,  196,  6, 'F');
      $pdf->Image($empresa[0]->logo, 10, 12, 25, 0, 'PNG');
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->cell(128,5, '', 0);
      $pdf->cell(40,5, 'CENTRO MEDICO ESPECIALIZADO', 0);
      $pdf->Ln(5);
      $pdf->cell(128,5, '', 0);
      $pdf->cell(40,5, 'INFORME MOVIMIENTO DE KARDEX', 0);
      $pdf->Ln(20);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'FECHA', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'CONSULTA 2023-12-17', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'RESPONSABLE', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'USUARIO DE LA CLINICA', 1);
      $pdf->Ln(10);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(196,5, 'MOVIMIENTOS DE KARDEX DEL PRODUCTO CATETER NA 24', 0);

      $pdf->Ln(10);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(25,5, 'TIPO', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(50,5, 'MOTIVO', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(25,5, 'FECHA', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(26,5, 'ENTRADA', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(30,5, 'SALIDA', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'USUARIO', 1);
      foreach($kardex as $movimientos){
        $pdf->Ln(5);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(25,5, $movimientos->tp_documento.''.$movimientos->codigo_kardex, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(50,5, $movimientos->motivo, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(25,5, $movimientos->fecha, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(26,5, $movimientos->entrada, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(30,5, $movimientos->salida, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(40,5, $movimientos->usuario, 1);
      }

      $pdf->Output();
      exit;
    }

    public function pdfInventario(Request $request) {
      $empresa = $this->Pdf->getEmpresa("1");
      $productos = $this->Pdf->pdfInventario(1);
      
      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  44,  196,  6, 'F');
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  74,  196,  6, 'F');
      $pdf->Image($empresa[0]->logo, 10, 12, 25, 0, 'PNG');
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->cell(128,5, '', 0);
      $pdf->cell(40,5, 'CENTRO MEDICO ESPECIALIZADO', 0);
      $pdf->Ln(5);
      $pdf->cell(123,5, '', 0);
      $pdf->cell(45,5, 'INFORME DE EXISTENCIA DE INVENTARIO', 0);
      $pdf->Ln(20);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'FECHA', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'CONSULTA 2023-12-17', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'RESPONSABLE', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'JERSON GALVEZ ENSUNCHO', 1);
      $pdf->Ln(20);
      $pdf->SetFont('Arial', 'B', 8);
      $pdf->cell(196,5, 'CONSULTA DE INVENTARIO DE FECHA 17-06-2024', 0);
      $pdf->Ln(10);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(20,5, 'ID', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(66,5, 'PRODUCTO', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'PRECIO', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'STOCK', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(30,5, 'ESTADO', 1);
      foreach($productos as $producto){
        $pdf->Ln(5);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(20,5, $producto->codigo, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(66,5, utf8_decode($producto->nombre), 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(40,5, $producto->precio, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(40,5, $producto->stock, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(30,5, $producto->estado, 1);  
      }

      $pdf->Output();
      exit;

    }

    public function pdfCaja(Request $request) {

      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  44,  196,  6, 'F');
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  69,  196,  6, 'F');
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  99,  75,  6, 'F');
      $pdf->Image('https://png.pngtree.com/template/20190530/ourmid/pngtree-bird-logo-vector-image_204552.jpg', 10, 5, 30, 0, 'JPG');
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->cell(128,5, '', 0);
      $pdf->cell(40,5, 'CENTRO MEDICO ESPECIALIZADO', 0);
      $pdf->Ln(5);
      $pdf->cell(124,5, '', 0);
      $pdf->cell(44,5, 'INFORME DIARIO DE CIERRE DE CAJA', 0);
      $pdf->Ln(20);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'FECHA', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'CONSULTA 2023-12-17', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'RESPONSABLE', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'JERSON GALVEZ ENSUNCHO', 1);
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(196,5, 'REPORTE DIARIO 2024-06-17', 0);
      $pdf->Ln(10);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(46,5, 'PACIENTE', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(10,5, 'No', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(55,5, 'MEDICO', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(55,5, 'ESPECIALIDAD', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(15,5, 'EFECTIVO', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(15,5, 'TARJETA', 1);
      $pdf->Ln(5);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(46,5, 'JERSON GALVEZ ENSUNCHO', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(10,5, '10', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(55,5, 'CUNIA PEREZ MARLENI', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(55,5, 'ECOGRAFIA TRANSVAGINAL', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(15,5, '60', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(15,5, '100', 1);
      $pdf->Ln(5);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(111,5, '', 0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(55,5, 'TOTAL DOCTOR', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(30,5, '$ 2.000.000', 1);
      $pdf->Ln(20);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(30,5, 'IMPRESION', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(45,5, '23:28 PM  17-06-2024', 1);

      $pdf->Output();
      exit;

    }

    public function pdfGastos(Request $request) {
      $empresa = $this->Pdf->getEmpresa("1");
      $gastos = $this->Pdf->pdfGastos('2023-08-07');
      // print_r($gastos);
      // exit;
      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  44,  196,  6, 'F');
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  69,  196,  6, 'F');
      $pdf->Image($empresa[0]->logo, 10, 12, 25, 0, 'PNG');
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->cell(128,5, '', 0);
      $pdf->cell(40,5, 'CENTRO MEDICO ESPECIALIZADO', 0);
      $pdf->Ln(5);
      $pdf->cell(138,5, '', 0);
      $pdf->cell(30,5, 'INFORME DE GASTOS', 0);
      $pdf->Ln(20);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'FECHA', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'CONSULTA 2023-12-17', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'RESPONSABLE', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'JERSON GALVEZ ENSUNCHO', 1);
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 8);
      $pdf->cell(196,5, 'REPORTE DE GASTOS', 0);

      $pdf->Ln(10);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(30,5, 'RAZON SOCIAL', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(56,5, 'DESCRIPCION', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(30,5, 'FE RECEPCION', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'COLABORADOR', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'TOTAL', 1);

      $pdf->Ln(5);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(30,5, $gastos[0]->razon_social, 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(56,5, $gastos[0]->descripcion, 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(30,5, $gastos[0]->f_recepcion, 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(40,5, $gastos[0]->nro_doc, 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(40,5,'$'.$gastos[0]->monto, 1);

      $pdf->Ln(10);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(140,5, '', 0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(56,5, 'TOTAL  $', 1);

      $pdf->Output();
      exit;
    }

    public function pdfLaboratorio(Request $request) {
      $empresa = $this->Pdf->getEmpresa("1");
      $laboratorio = $this->Pdf->pdfLaboratorio();
      
      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  44,  196,  6, 'F');
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  69,  196,  6, 'F');
      $pdf->Image($empresa[0]->logo, 10, 12, 25, 0, 'PNG');
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->cell(128,5, '', 0);
      $pdf->cell(40,5, 'CENTRO MEDICO ESPECIALIZADO', 0);
      $pdf->Ln(5);
      $pdf->cell(115,5, '', 0);
      $pdf->cell(53,5, 'INFORME LABORATORIO DE CIERRE DE CAJA', 0);
      $pdf->Ln(20);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'FECHA', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'CONSULTA 2023-12-17', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'RESPONSABLE', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'JERSON GALVEZ ENSUNCHO', 1);
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 8);
      $pdf->cell(196,5, 'REPORTE DIARIO', 0);
      $pdf->Ln(10);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(15,5, 'No', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(60,5, 'PACIENTE', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(80,5, 'ESPECIALIDAD', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(20,5, 'PAGO', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(20,5, 'VALOR', 1);

      foreach($laboratorio as $laboratorios){
        $pdf->Ln(5);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(15,5, 'LB'.$laboratorios->id_laboratorio, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(60,5, $laboratorios->nombre.' '.$laboratorios->apellido, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(80,5, $laboratorios->descripcion, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(20,5, $laboratorios->tipo_deposito, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(20,5, '$'.$laboratorios->total, 1);
      }
      $pdf->Ln(15);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(145,5, '',0);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(20,5, 'TOTAL', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(30,5, '$ 90.000', 1);

      $pdf->Output();
      exit;

    }

    public function pdfPagos(Request $request) {
      $empresa = $this->Pdf->getEmpresa("1");
      $pagos = $this->Pdf->pdfPagos();
      // print_r($pagos);
      // exit;
      $pdf = new Fpdf('p', 'mm', 'A4');
      $pdf->AddPage();
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  44,  196,  6, 'F');
      $pdf->SetDrawColor(0,24,0);
      $pdf->SetFillColor(115,115,115);
      $pdf->Rect(10,  69,  196,  6, 'F');
      $pdf->Image($empresa[0]->logo, 10, 12, 25, 0, 'PNG');
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->cell(128,5, '', 0);
      $pdf->cell(40,5, 'CENTRO MEDICO ESPECIALIZADO', 0);
      $pdf->Ln(5);
      $pdf->cell(128,5, '', 0);
      $pdf->cell(40,5, 'INFORME PAGO', 0);
      $pdf->Ln(20);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'FECHA', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'CONSULTA 2023-12-17', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(40,5, 'RESPONSABLE', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(58,5, 'JERSON GALVEZ ENSUNCHO', 1);
      $pdf->Ln(15);
      $pdf->SetFont('Arial', 'B', 8);
      $pdf->cell(196,5, 'CONSULTA DE PAGO', 0);

      $pdf->Ln(10);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(15,5, 'FACTURA', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(50,5, 'PACIENTE', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(45,5, 'MEDICO', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(41,5, 'CONCEPTO', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(20,5, 'FECHA', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(25,5, 'TOTAL', 1);
      
      foreach($pagos as $pago){
        $pdf->Ln(5);
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(15,5, 'FA'.$pago->codigo_pago, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(50,5, $pago->nombre.' '.$pago->apellido, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(45,5, $pago->doctor, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(41,5, utf8_decode($pago->especialidad), 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(20,5, $pago->fecha, 1);
        $pdf->SetFont('Arial', '', 7);
        $pdf->cell(25,5, $pago->total, 1);
      }
      $pdf->Ln(10);
      $pdf->SetTextColor(0,0,0);
      $pdf->cell(136,5, '', 0);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(30,5, 'DESCUENTO', 1);
      $pdf->SetFont('Arial', 'B', 7);
      $pdf->cell(30,5, 'TOTAL', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->Ln(5);
      $pdf->SetTextColor(0,0,0);
      $pdf->cell(136,5, '', 0);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(30,5, '10%', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->cell(30,5, '$ 20.000', 1);
      $pdf->SetFont('Arial', '', 7);
      $pdf->Output();
      exit;

    }

}
