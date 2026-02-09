<?php

class Visite{
    
    private string $etat ;
    private int $dureeTotal ;
    private Station $laStation ;
    private array $lesBornes;

    public function __construct( string $etat ,int $dureeTotal , Station $uneStation , array $lesBornes){
        $this-> etat = $etat ;
        $this -> dureetotal = $dureeTotal ;
        $this -> laStation = $uneStation ;
        $this -> lesBornes = $lesBornes;
        
    }

    public function getDureeTotal(){
        return $this-> dureeTotal;
    }

    public function getEtat(){
        return $this-> etat ;
    }

    public function ChangerEtat(){
        if($this->etat == "p" ){
            $this->etat = "a";
        }
        elseif($this->etat =="a"){
            $this->etat = "r";
        }
        else{
            print("Etat invalide vueillez le changer svp ");
        }
    }
}