<?php

require 'modele/pdf.php';
require 'modele/pdf_textbox.php';
require 'modele/pdf_mc_table.php';

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage("P", "A4");

$pdf->SetFont('Times','',14);
$x = $pdf->getX();
$y = $pdf->getY();
$w = $pdf->GetPageWidth();
$h = $pdf->GetPageHeight();

$largeur = 120;
$pdf->setXY($x, $y);
$pdf->Cell($largeur,10,'Informations de base',0,1,'C');
$pdf->line(11, 35, 129, 35);

$pdf->setXY($x, $y);
$pdf->MultiCell($largeur, 6, "\n" . "\n" .
						'Nom : ' . htmlspecialchars($fiche['nom']) . "\n" .
						'Sexe : ' . htmlspecialchars($fiche['sexe']) . "\n" .
						'Race : ' . htmlspecialchars($fiche['race']) . "\n".
						'Classe : ' . htmlspecialchars($fiche['classe']) ."\n" .
						'Metier : ' . htmlspecialchars($fiche['metier']) ."\n" .
						'Or : ' . htmlspecialchars($fiche['argent']) ."\n\n" .
						'Niveau : ' . htmlspecialchars($fiche['niveau']) ."\n" .
						'Experience : ' . htmlspecialchars($fiche['experience']) . "\n\n" .
						'Points de vie : ' . htmlspecialchars($fiche['pv']) . "\n" .
						'Points de magie : ' . htmlspecialchars($fiche['pm'])
						 , 1);

$x2 = $largeur + $x + 2;
$pdf->setXY($x2, $y);
$pdf->Cell(38,10,'Statistiques',0,1,'C');
$pdf->line(133, 35, 169, 35);

$pdf->setXY($x2, $y);
$pdf->MultiCell(38, 7,  "\n" . "\n" .
						'FOR : ' . htmlspecialchars($fiche['force']) . "\n" .
						'DEX : ' . htmlspecialchars($fiche['dexterite']) . "\n" .
						'CON : ' . htmlspecialchars($fiche['constitution']) . "\n".
						'INT : ' . htmlspecialchars($fiche['intelligence']) ."\n" .
						'SAG : ' . htmlspecialchars($fiche['sagesse']) ."\n" .
						'CHA : ' . htmlspecialchars($fiche['charisme'])
						 , 1, 'L');
$pdf->line(11, 76, 129, 76);
$pdf->line(11, 94, 129, 94);

$pdf->setY(150);
$pdf->MultiCell(50, 6, " w : " . $w . "\n" .
						" h : ". $h . "\n" .
						" x : " . $x . "\n" .
						" y : ". $y 
						 , 1);
$pdf->Output();