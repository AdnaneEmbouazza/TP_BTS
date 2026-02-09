<?php
require('..\..\..\..\PHPLib\FPDF\fpdf.php');
require('Bateau.php');
require('BateauVoyageur.php');
require('BateauFret.php');

//$pdf = new FPDF();
//$pdf->AddPage();
//$pdf->SetFont('Arial','B',16);
////$pdf->SetXY(25,);
////$pdf->Cell(40,10,'Hello World !',0,0, 'r');
//
//$x = ($pdf->GetPageWidth() - 40) / 2;
//$pdf->SetX($x);
//$pdf->Cell(40, 10, 'Hello World !', 0, 0, 'C');
//
//$pdf->Image("images/test.jpg", 50, 50, 100, 50);
//$pdf->Output();

//
$picolo = new BateauVoyageur("A2", "The Thousand Sunny", 31.0, 4.0, 250.7, "images/test.jpg", ["Equipement 1, Equipement 2, Equipement 3, Equipement 4"]);
$vegeta = new BateauVoyageur("A3", "The RedRock", 55, 2, 555, "images/b.jpg", ["Equipement 1, Equipement 2, Equipement 3, Equipement 4"]);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
// Centrer et afficher le texte de Piccolo
$x = ($pdf->GetPageWidth() - 100) / 2;
$pdf->SetX($x);
$pdf->MultiCell(100, 10, $picolo->versChaine(), 0, 'C', 0);

// Récupérer Y après `MultiCell()` (sans `GetX()`)
$y = $pdf->GetY();

// Insérer l'image juste après
$pdf->Image($picolo->getImageBatVoy(), $x, $y + 5, 100, 50);

// Ajouter un espace avant le texte suivant
$pdf->Ln(60); // Ajuste selon l'image

// Centrer et afficher le texte de Vegeta
$x = ($pdf->GetPageWidth() - 100) / 2;
$pdf->SetX($x);
$pdf->MultiCell(100, 10, $vegeta->versChaine(), 0, 'C', 0);

// Récupérer Y après `MultiCell()`
$y = $pdf->GetY();

// Insérer l'image juste après
$pdf->Image($vegeta->getImageBatVoy(), $x, $y + 5, 100, 50);
$pdf->Output();
