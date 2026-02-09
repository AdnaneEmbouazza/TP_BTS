<?php

class pompier {

    private string $nom ;
    private string $prenom ;
    private string $numeroBip;

    public function __construct($nom ,$prenom , $num){
        $this -> nom = $nom ;
        $this -> prenom = $prenom ;
        $this -> numeroBip = $num ;
    }

    public function getNumeroBip(){
        return $this -> numeroBip;
    }

    public function getNom(){
        return $this -> nom;
    }

    public function  getPrenom(){
        return $this -> prenom;
    }
    
    public function getStatut(periode $unePeriode){
        $unePeriode -> getStatut($this);
    }

    public function Missionner(periode $unePeriode){
        $unePeriode -> Missionner($this);
    }
}