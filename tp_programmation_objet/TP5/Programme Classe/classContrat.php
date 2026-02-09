<?php

class Contrat {
    private int $numeroContrat ;
    private string $dateContrat ;
    private float $montantContrat ;
    private array $tabInterventions;
    private static int $nbInterventions=0;

public function __construct ($num , $date , $montant){
    $this -> numeroContrat = $num ;
    $this -> dateContrat = $date ;
    $this -> montantContrat = $montant ;
    $this -> tabInterventions = [];
}

public function getNumeroContrat(){
    return $this -> numeroContrat ;
}

public function getDateContrat(){
    return $this -> dateContrat ;
}

public function getMontantContrat(){
    return $this -> montantContrat ;
}

public function getTabInterventions(){
    return $this -> tabInterventions ;
}

public function getTabInterventionsPrecis($i){
    return $this -> tabInterventions[$i] ;
}
}