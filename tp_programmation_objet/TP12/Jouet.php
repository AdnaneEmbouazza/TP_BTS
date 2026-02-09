<?php

class Jouet {
    private int $numero ;
    private string $libelle ;
    private Categorie $categorie ;
    private Tranche $trancheAge ;

    public function __construct($numero , $libelle , $cat , $tranche){
        $this->numero = $numero ;
        $this->libelle = $libelle ;
        $this->categorie = $cat ;
        $this->trancheAge = $tranche ;
    }

    public function getNum(){
        return $this-> numero ;
    }

    public function getLibelle(){
        return $this-> libelle ;
    }

    public function getCat(){
        return $this-> categorie ;
    }

    public function getTranche(){
        return $this-> trancheAge ;
    }

    public function Convient(int $unAge) : bool {
        if ($unAge < $this-> getTranche() -> getAgeMin() || $unAge > $this -> getTranche() -> getAgeMax()){
            return false ;
        } 
    return true ;  
    }

    public function getInfo(){
        return $this->libelle . ";" . $this->categorie -> getLibelle() . ";". $this->tranche->getAgeMin() . ";" . $this-> tranche -> getAgeMax() ;
    }
}