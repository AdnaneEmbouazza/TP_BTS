<?php

class BateauVoyageur extends Bateau
{
    private float $vitesseBatVoy;
    private string $imageBatVoy;
    private array $lesEquipements;

    public function __construct(string $unId, string $unNom, float $uneLongueur, float $uneLargeur, float $uneVitesse,
                                string $uneImage, array $desEquipements)
    {
        parent::__construct($unId,$unNom, $uneLongueur, $uneLargeur);
        $this->vitesseBatVoy = $uneVitesse;
        $this->imageBatVoy = $uneImage;
        $this->lesEquipements = $desEquipements;
    }

    public function getImageBatVoy():string
    {
        return $this->imageBatVoy;
    }

    // Surcharge (Override) / Polymorphisme
    public function versChaine(): string
    {
        $e = "";
        foreach ($this->lesEquipements as $equipement){
            $e .= "- $equipement\n";
        }
        return "Nom du bateau : $this->nomBat\n".
            "Longueur : $this->longueurBat metres\n".
            "Largeur : $this->largeurBat metres\n".
            "Vitesse : $this->vitesseBatVoy noeuds\n".
            "Liste des equipements du bateau :\n".
            "$e";
    }

}