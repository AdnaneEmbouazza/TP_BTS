<?php

class Adresse {
    private string $Rue ;
    private string $Ville ; 
    private int $CodePostal ;
    private Client $leClient ;

public function __construct($rue , $city , $CP , $client ){
    $this -> Rue = $rue ;
    $this -> Ville = $city ;
    $this -> CodePostal = $CP ;
    $this -> leClient = $client ;
}

public function getRue(){
    return $this -> Rue ;
}

public function getVille(){
    return $this -> Ville ;
}

public function getCodePostal(){
    return $this -> CodePostal ;
}

}