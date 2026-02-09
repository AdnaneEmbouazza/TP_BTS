<?php

class Intervention{
    private int $numIntervention ;
    private string $dateIntervention ;
    private int $dureeIntervention ;
    private float $tarifKm ;
    private Employe $technicien ;  

public function __consrtuct ($numero , $date , $duree , $tarif , $tech ){
    $this -> numIntervention = $numero;
    $this -> dateIntervention = $date ;
    $this -> dureeIntervention = $duree ;
    $this -> tarifKm = $tarif ;
    $this -> technicien = $tech ;
}

public function getNumIntervention(){
    return $this -> numIntervention ;
}

public function getDateIntervention(){
    return $this -> dateIntervention ;
}

public function getDureeIntervention(){
    return $this -> dureeIntervention ;
}

public function getTarifKm(){
    return $this -> tarifKm ;
}

}