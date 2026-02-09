<?php

class Bateau{
    private string $idBat;
    private string $NomBat;
    private float $longueurBat;
    private float $largeurBat;

    public function __construct(string $unId, string $unNom, float $uneLongueur, float $uneLargeur){
        $this->idBat = $unId;
        $this->NomBat = $unNom;
        $this->longueurBat = $uneLongueur;
        $this->largeurBat = $uneLargeur;
    }

    public function getIdBateau(){
        return $this->idBat;
    }

    public function getNomBateau(){
        return $this->NomBat;
    }

    public function getLongueurBateau(){
        return $this->longueurBat;
    }

    public function getLargeurBateau(){
        return $this->largeurBat;
    }

    public function ToString(){
        print("
        ID du Bateau : ".$this->getIdBateau()."\n 
        Nom du Bateau : ".$this->getNomBateau()."\n
        Longueur du Bateau ". $this->getLongueurBateau()." mètres \n
        Largeur du Bateau ".$this->getLargeurBateau()."  mètres \n \n");
    }

}

class BateauVoyageur extends Bateau{
    private float $vitesseBatVoyage;
    private string $imageBatVoyage;
    private array $lesEquipements;

    public function __construct(string $unId, string $unNom, float $uneLongueur, float $uneLargeur,float $uneVitesse,string $uneImage){
        parent::__construct($unId,$unNom,$uneLongueur,$uneLargeur);
        $this->vitesseBatVoyage=$uneVitesse;
        $this->imageBatVoyage=$uneImage;
        $this->lesEquipements=[];
    }

    public function getVitesseBatVoyage(){
        return $this->vitesseBatVoyage;
    }

    public function getImageBatVoyage(){
        return $this->imageBatVoyage;
    }

    public function ToString(){
        parent::ToString();
        print("
        Vitesse du Bateau : ".$this->getVitesseBatVoyage()." noeuds \n
        Equipements : \n \n");
        foreach ($this->lesEquipements as $unEquipement) {
            $unEquipement->ToString();
        }
    }

    public function ajoutEquipement(Equipement $unEquipement){
        $this->lesEquipements[]=$unEquipement;
    }

}

class BateauFret extends Bateau{
    private float $poidMaxBateauFret;
    
    public function __construct(string $unId, string $unNom, float $uneLongueur, float $uneLargeur,float $unPoid){
        parent::__construct($unId,$unNom,$uneLongueur,$uneLargeur);
        $this->poidMaxBateauFret = $unPoid;
    }

    public function getPoidMaxBateauFret(){
        return $this->poidMaxBateauFret;
    }

    public function ToString(){
        parent::ToString();
        print("Poid max du bateau de fret : ".$this->getPoidMaxBateauFret());
    }
}