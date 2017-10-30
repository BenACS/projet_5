<?php

require 'modele/pdf.php';



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(40, 10, 'test', 0, 1);
$pdf->Cell(0, 10, $_GET['nom'], 0, 1);
$pdf->Cell(20,10,'Titre',1,1,'C');
$pdf->Output();