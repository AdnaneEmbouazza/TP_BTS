<?php

class prestation {

    private string $libelle;
    private string $DateSoin;
    private string $HeureSoin;
    private Intervenant $intervenant;

    public function __construct($libelle , $heure , Intervenant $unIntervenant ){
        $this -> libelle = $libelle ;
        do {
        $this -> date = trim(fgets(STDIN));
        }
        while((!preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)));
        $this -> heure = $heure ;
        $this -> intervenant = $unIntervenant ;
    }

    public function getLibelle(){
        return $this -> libelle ;
    }

    public function getDate(){
        return $this -> DateSoin ;
    }

    public function getHeure(){
        return $this -> HeureSoin ;
    }

    public function getIntervenant(){
        return $this -> intervenant ;
    }

    public function CompareTo(prestation $unePrestation){
        $comparaison = strcmp($this -> getDate() , $unePrestation -> getDate());
        if($comparaison == 0){
            return 0 ;
        }
        elseif($comparaison > 0){
            return 1 ; 
        }
        else{
            return -1 ;
        }
    }

    
}

