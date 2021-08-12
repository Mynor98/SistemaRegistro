<?php
require('fpdf/fpdf.php');



class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logo.png',38,25,50);//izquierda derecha/arriba abajo,tamaño
    $this->Image('constanciab.png',95,32,80);//izquierda derecha/arriba abajo,tamaño
    // Arial bold 15
    $this->SetFont('Arial','B',8);
    // Movernos a la derecha
    $this->Cell(16);
    // Título
    //$this->SetX(25);
    $this->Cell(154,6,'Parroquia Santo Cristo de Esquipulas Tel: 7945-1180 scparroquia.guastatoya@gmail.com',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
   
    // Arial italic 8
    $this->SetFont('Arial','',10);
    // Número de página
    $this->SetY(-35);
    $this->Cell(0,10,utf8_decode('                                                                          ____________________________'),0,0,'C');
    $this->SetY(-30); 
    $this->Cell(0,10,utf8_decode('Sello Parroquial                                                    Párroco'),0,0,'C');
    
    //$this->Cell(0,10,utf8_decode('Párroco'),0,0,'');
}
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->SetY(60);
$pdf->Cell(33);
$pdf->Cell(40,10,utf8_decode('El infrascrito. Parroco de Parroquia Santo Cristo de Esquipulas'));

$pdf->SetY(68);
$pdf->Cell(60);
$pdf->Cell(40,10,utf8_decode('Certifica que en el libro de Bautizos'));
$pdf->SetY(76);
$pdf->Cell(33);
$pdf->Cell(40,10,utf8_decode('No.                      Folio                 de esta Parroquia consta que:'));
$pdf->SetY(84);
$pdf->Cell(33);
$pdf->Cell(40,10,utf8_decode('Nombre'));
$pdf->SetY(92);
$pdf->Cell(33);
$pdf->Cell(40,10,utf8_decode('nacido el         10        de      noviembre      de       1999'));
$pdf->SetY(100);
$pdf->Cell(33);
$pdf->Cell(40,10,utf8_decode('Hijo de '));
$pdf->SetY(108);
$pdf->Cell(33);
$pdf->Cell(40,10,utf8_decode('y de '));
$pdf->SetY(116);
$pdf->Cell(33);
$pdf->Cell(40,10,utf8_decode('y de '));
$pdf->SetY(124);
$pdf->Cell(33);
$pdf->Cell(40,10,utf8_decode('Habiendo sido padrino'));
$pdf->SetY(132);
$pdf->Cell(33);
$pdf->Cell(40,10,utf8_decode('Bautizó el Padre '));
$pdf->SetY(140);
$pdf->Cell(33);
$pdf->Cell(40,10,utf8_decode('Al margen dice: '));

$pdf->SetY(180);
$pdf->Cell(33);
$pdf->Cell(40,10,utf8_decode('fecha: '));

$pdf->Output();
?>