<?php

class Technicien {
    
    private int $matricule ;
    private string $nom ;
    private string $prenom ;
    private array $lesVisites ;

    public function __construct(int $matricule , string $nom , string $prenom) {
        $this-> matricule = $matricule ;
        $this -> nom = $nom ;
        $this -> prenom = $prenom ;
        $this -> lesVisites = [];
    }

    public function getLesVisites(){
        return $this-> lesVisites;
    }

    public function affecterVisite(Visite $uneVisite){
        $this->lesVisites[]=$uneVisite;
    }

    public function getTempsOccupe():int{
        $cumul=0;
        foreach($this->lesVisites as $Visite){
            $cumul += $Visite -> getDureeTotal();
        }
        return $cumul;
    }

    
}