<?php

class Bateau
{
    protected string $idBat;
    protected string $nomBat;
    protected float $longueurBat;
    protected float $largeurBat;

    public function __construct(string $unId, string $unNom, float $uneLongueur, float $uneLargeur)
    {
        $this->idBat = $unId;
        $this->nomBat = $unNom;
        $this->longueurBat = $uneLongueur;
        $this->largeurBat = $uneLargeur;
    }

    public function versChaine():string
    {
        return "Nom du bateau : $this->nomBat\n".
            "Longueur : $this->longueurBat mètres\n".
            "Largeur : $this->largeurBat mètres";
    }
}