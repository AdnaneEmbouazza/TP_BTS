<?php

class Treservoir {
    private string $carburant ;
    private int $capacite ;
    private float $volumeRestant ;


public __construct($leCarburant , $laCapacite , $leVolumeRestant){
    $this -> carburant = $leCarburant ;
    $this -> capacite = $laCapacite ;
    $this -> volumeRestant = $leVolumeRestant;
}

public function getCarburant(){
    return $this -> carburant ;
}

public function getVolumeRestant(){
    return $this -> volumeRestant ;
}

public function getCapacite(){
    return $this -> capacite ;
}

public function getVolumeBesoin(){
    $ecartVolume = $this -> getCapacite() - $this -> getVolumeRestant();

    if ($this -> getVolumeRestant() < $this -> getCapacite() * 0.2){
        $this -> getVolumeRestant() += $ecartVolume ;
    }

    return $ecartVolume ;
}

public function changeVolume( $changement ){
    $this -> getVolumeRestant() += $changement ;
}

}