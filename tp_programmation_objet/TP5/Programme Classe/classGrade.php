<?php

class Grade {
    private string $codeGrade ;
    private string $libelleGrade;
    private float $tauxHoraire ;

public function __construct($code , $libelle , $taux){
    $this -> codeGrade = $code ;
    $this -> libelleGrade = $libelle ;
    $this -> tauxHoraire = $taux ;
}

public function getTauxHoraire(){
    return $this -> tauxHoraire ;
}

public function getlibelGrade(){
    return $this -> libelleGrade ;
}

public function getCodeGrade(){
    return $this -> codeGrade ;
}


}