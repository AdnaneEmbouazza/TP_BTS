<?php

class Tstation{
    private string $nom;
    private array $tabReservoir;
    private int $nbReservoir;

public function __construct($unNom){
    $this -> nom = $unNom;
    $this -> tabReservoir = [];
    $this -> nbReservoir = 0 ;
}

public function addReservoirStation(Treservoir $unReservoir){
    if(count($this -> tabReservoir) < 4 ){
        $this -> tabReservoir [] = $unReservoir;
        $this -> nbReservoir ++ ;
    }
}

public function getNom(){
    return $this -> nom;
}

public function getNbReservoir(){
    return $this -> nbReservoir ;
}

public function getTabReservoir(){
    return $this -> tabReservoir ;
}

public function getBesoin(string $unCarburant ){
    for($i=0 ; $i < count($this -> tabReservoir ) ; $i++){
        if ($this -> tabReservoir[$i]-> getCarburant() == $unCarburant ){
            return $this -> tabreservoir[$i] -> getVolumeBesoin();
        }
    }
    return 0 ;
}

}