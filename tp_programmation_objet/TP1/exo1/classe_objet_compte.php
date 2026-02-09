<?php

class Compte {
    private $numC;
    private $nomC;
    private $solde;


function __construct($numCompte,$nomCompte,$solde){
    $this-> numC = $numCompte ;
    $this-> nomC = $nomCompte ;
    $this-> solde = $solde ;
}

public function crediter($credit){
    $this-> solde += $credit;
}

public function debiter($debit){
    $this-> solde -= $debit;
}

public function _getsolde(){
    return $this -> solde ;
}

public function _getnumC(){
    return $this -> numC ;
}

public function _getnomC(){
    return $this -> nomC ;
}

public function affiche(){
    print_r($this);
}
}

?>