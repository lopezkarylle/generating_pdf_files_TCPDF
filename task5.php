<?php
require "vendor/autoload.php";

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf = new TCPDF('P','mm','Letter');
$pdf->AddFont('kaushan','','KaushanScript-Regular.php');
$pdf->AddFont('oswald','','Oswald-VariableFont_wght.php');
$pdf->AddFont('lobster','','Lobster-Regular.php');

$pdf->AddPage();
$pdf->SetFont('kaushan','',35);
$pdf->Write(12,'What comes easy woould not last, what lasts would not come easy.');
$pdf->Ln(13);
$pdf->SetFont('kaushan','',15);
$pdf->Write(10,'- Our Mindful Life');
$pdf->Ln(35);

$pdf->SetFont('oswald','',35);
$pdf->Write(12,'Do not give the best of you to those who do not see the best in you.');
$pdf->Ln(13);
$pdf->SetFont('oswald','',15);
$pdf->Write(10,'- Street Writings');
$pdf->Ln(35);

$pdf->SetFont('lobster','',35);
$pdf->Write(12,'Put your happiness over everything. This is your life, so dont worry about what they will say.');
$pdf->Ln(13);
$pdf->SetFont('lobster','',15);
$pdf->Write(10,'- S. Mcnutt');
$pdf->Ln(35);



$pdf->Output();
?>
