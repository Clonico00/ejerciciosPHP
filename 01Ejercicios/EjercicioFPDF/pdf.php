<?php
require_once "../Libraries/fpdf184/fpdf.php";
class PDF extends FPDF
{
    function Header()
    {
        $this->Image('./images/logo.png',10,8,33);
        $this->SetFont('Arial','B',15);
        $this->Cell(80);
        $this->Cell(30,10,'DATOS USUARIOS',0,0,'C');
        $this->Ln(60);
    }
}


ob_start();
$pdf = new PDF();
$header = array('NOMBRES', 'APELLIDOS');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Output("datos", "I");
ob_end_flush();
