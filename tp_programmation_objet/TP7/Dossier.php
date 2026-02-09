<?php

class Dossier {
    private string $nomPatient ;
    private string $prenomPatient ;
    private string $DateNaissancePatient;
    private array $mesPrestations;

    public function __construct($nom , $prenom , $date ){
        $this -> nomPatient = $nom ;
        $this -> prenomPatient = $prenom ;
        $this -> DateNaissancePatient = $date ;
        $this -> mesPrestations = [];
    }

    public function addPrestations($libelle , $date , $heure , intervenant $intervenant){
        $this -> mesPrestations [] = new Prestation($libelle , $date , $heure , $intervenant);
    }

    public function getNbPrestations(){
        return count($this -> mesPrestations);
    }

    public function getNbPrestationsExternes(){
        $compteur = 0 ;
        foreach ($this -> mesPrestations as $cle){
            if ($cle -> getIntervenant() instanceof IntervenantExterne ){
                $compteur ++ ;
            }
        }
        return $compteur ++ ;
    }

    public function getNbJoursSoins(){
        for($i=0 ; $i<count($this -> mesPrestations)-1; $i++){
            for($j=0; $j<count($this-> mesPrestations)-1-$i ; $j++){
                if($this -> mesPrestations[$i] -> CompareTo($this->mesPrestations[$i+1])==1){
                    $temp=$this -> mesPrestation[$i];
                    $this -> mesPrestations[$i] = $this -> mesPrestations[$i+1];
                    $this -> mesPrestations[$i+1] = $temp ;
                }
            }
        }

        $compteur=0;
        for($i=0 ; $i<count($this-> mesPrestations)-1; $i++){
            if($this -> mesPrestations[$i]-> getDate() != $this->mesPrestations[$i+1] -> getDate()){
                $compteur ++ ;
            }
        }
        return $compteur ;
    }

}