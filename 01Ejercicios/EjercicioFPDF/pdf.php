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

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

    function datos($file)
    {
        $this->SetFont('Arial','',12);
        $this->Cell(0,10,'NOMBRE',1,0,'L');
        $this->Cell(0,10,'APELLIDO',1,0,'R');
        $this->Ln();
        $fichero = fopen($file, "r");
        while(!feof($fichero)) {
            $linea = fgets($fichero);
            if (strpos($linea, "Nombre") !== false) {
                $this->Cell(0,10,substr($linea, 8),1,0,'L');

            }
            if (strpos($linea, "Apellido") !== false) {
                $this->Cell(0,10,substr($linea, 10),1,0,'R');
                $this->Ln();

            }
        }
        fclose($fichero);
    }

}

ob_start();
$pdf = new PDF();
$header = array('NOMBRES', 'APELLIDOS');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->datos("datos.txt");
$pdf->SetFont('Times','',12);
$pdf->Output("datos", "I");
ob_end_flush();
