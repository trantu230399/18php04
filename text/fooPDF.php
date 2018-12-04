<?php
use setasign\Fpdi\Fpdi;
require_once('fpdf.php');

require_once('src/autoload.php');

// initiate FPDI
 
// initiate FPDI
$pdf = new Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile('ttt.pdf');
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 10, 10, 180);

// now write some text above the imported page
$pdf->SetFont('Helvetica');
$pdf->SetTextColor(100, 0, 0);

$pdf->Write($pdf->SetXY(40, 220), 'This is just a simple text');
$pdf->Write($pdf->SetXY(40, 206), 'This is just a simple text');
$pdf->Write($pdf->SetXY(120, 205), 'This is just a simple text');


$pdf->Output();