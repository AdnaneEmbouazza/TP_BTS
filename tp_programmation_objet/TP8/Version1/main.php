<?php

include "./ClassBateau.php";
include "./ClassEquipement.php";
include "./fpdf.php";

$desEquipements = [];

$bateau = new Bateau("A1","The RedRock",30.5,5.0);
$bateauDeVoyage = new BateauVoyageur("A2","The Thousand Sunny",31.0,4.0,250.5,$desEquipements);
$bateauDeFret = new BateauFret("A3","Thriller Bark",200,300,30000);
$Equipement1 = new Equipement("A4","Bar à chicha");
$Equipement2 = new Equipement("A5","Terrain de basket");
$bateauDeVoyage->ajoutEquipement($Equipement1);
$bateauDeVoyage->ajoutEquipement($Equipement2);
$bateauDeVoyage->BateauVoyage_ToString();
$pdf = new fpdf();


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
