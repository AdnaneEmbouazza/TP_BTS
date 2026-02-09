<?php

class Ttalto {
    private array $mesReservoirs ;
    private array $mesStations ;

public function __construct(){
    $this -> mesReservoirs = [];
    $this -> mesStations = [];
}

public function getNbstations(){
    return $this -> count($this-> mesStations);
}

public function getStation($i){
    return $this -> mesStations[$i];
}

public function Livrer(string $uncarburant , int $volume ){
    $i=0;
    while($this -> mesReservoirs[$i]-> getCarburant() != $unCarburant){
        $i ++ ;
    }
    $this -> mesReservoirs[$i] -> getVolumeRestant() -= $volume ;
}

public function addReservoirTalto(Treservoir $unReservoir){
    if(count($this -> mesReservoirs) < 4 ){
        $this -> mesReservoirs [] = $unReservoir;
    }
}

public function reste(string $carburant) {
    $i=0;
    while($this -> mesReservoirs[$i]-> getCarburant() != $unCarburant){
        $i ++ ;
    }
    return $this -> mesReservoirs[$i] -> getVolumeRestant() ;
}

}