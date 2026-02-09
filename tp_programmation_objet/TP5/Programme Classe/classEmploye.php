<?php

class Employe{
    private int $numeroEmploye ;
    private string $nomEmploye ;
    private string $DateEmbauche ;
    private Grade $qualification ;

public function __construct( $numero , $nom , $date , $qualif){
    $this -> numeroEmploye = $numero ;
    $this -> nomEmploye = $nom ;
    $this -> DateEmbauche = $date ;
    $this -> qualification = $qualif ;
}

public function getNumeroEmploye(){
    return $this -> numeroEmploye ;
}

public function getNomEmploye(){
    return $this -> nomEmploye ;
}

public function getDateEmbauche(){
    return $this -> DateEmbauche ;
}


}