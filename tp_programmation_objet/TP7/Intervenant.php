<?php

class Intervenant {
    private string $nom ;
    private string $prenom ; 
    private array $lesPrestations ;

    public function __construct($name , $surname) {
        $this -> nom = $name ;
        $this ->prenom = $surname ;
        $this -> lesPrestations = [] ;
    }

    public function getNom(){
        return $this -> nom ;
    }

    public function getPrenom(){
        return $this -> prenom ;
    }

    public function addPrestation(Prestation $unePrestation ){
        $this -> lesPrestations [] = $unePrestation ;
    }

    
}