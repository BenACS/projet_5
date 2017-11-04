<?php

require 'modele/pdf.php';
require 'modele/pdf_textbox.php';
require 'modele/pdf_mc_table.php';

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage("P", "A4");
$pdf->SetFont('Times','',16);
$pdf->Cell(20,10,'Titre',1,1,'C');
$pdf->Ln(2);

$pdf->SetFont('Times','',14);
$x = $pdf->getX();
$y = $pdf->getY();
$w = $pdf->GetPageWidth();
$h = $pdf->GetPageHeight();

$largeur = 50;
$pdf->MultiCell($largeur, 6, 'Informations de base' . "\n" .
						'Nom : ' . htmlspecialchars($fiche['nom']) . "\n" .
						'Sexe : ' . htmlspecialchars($fiche['sexe']) . "\n" .
						'Race : ' . htmlspecialchars($fiche['race']) . "\n".
						'Classe : ' . htmlspecialchars($fiche['classe']) ."\n" .
						'Metier : ' . htmlspecialchars($fiche['metier']) ."\n" .
						'Or : ' . htmlspecialchars($fiche['argent']) ."\n\n" .
						'Niveau : ' . htmlspecialchars($fiche['niveau']) ."\n" .
						'Experience : ' . htmlspecialchars($fiche['experience']) . "\n\n" .
						'Points de vie : ' . htmlspecialchars($fiche['pv']) . "\n" .
						'Points de magie : ' . htmlspecialchars($fiche['pm']) . "\n " .
						"x : " . $x . "\n" .
						" y : ". $y 
						 , 1);
$x2 = $largeur + $x + 2;
$pdf->setXY($x2, $y);
$pdf->MultiCell(95, 6, 'Informations de base' . "\n" .
						'Nom : ' . htmlspecialchars($fiche['nom']) . "\n" .
						'Sexe : ' . htmlspecialchars($fiche['sexe']) . "\n" .
						'Race : ' . htmlspecialchars($fiche['race']) . "\n".
						'Classe : ' . htmlspecialchars($fiche['classe']) ."\n" .
						'Metier : ' . htmlspecialchars($fiche['metier']) ."\n" .
						'Or : ' . htmlspecialchars($fiche['argent']) ."\n\n" .
						'Niveau : ' . htmlspecialchars($fiche['niveau']) ."\n" .
						'Experience : ' . htmlspecialchars($fiche['experience']) . "\n\n" .
						'Points de vie : ' . htmlspecialchars($fiche['pv']) . "\n" .
						'Points de magie : ' . htmlspecialchars($fiche['pm']) . "\n " .
						"w : " . $w . "\n" .
						" h : ". $h
						 , 1);
$pdf->Output();