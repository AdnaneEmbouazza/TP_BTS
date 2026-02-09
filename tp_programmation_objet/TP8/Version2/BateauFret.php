<?php

class BateauFret extends Bateau
{
    private float $poidsmaxBatFret;

    public function __construct(string $unId, string $unNom, float $uneLongueur, float $uneLargeur, float $poidsmaxBatFret)
    {
        parent::__construct($unId, $unNom, $uneLongueur, $uneLargeur);
        $this->poidsmaxBatFret = $poidsmaxBatFret;
    }

    public function versChaine(): string
    {
        return "Nom du bateau : $this->nomBat\n".
            "Longueur : $this->longueurBat mètres\n".
            "Largeur : $this->largeurBat mètres\n".
            "Poids Max : $this->poidsmaxBatFret kg";
    }

}