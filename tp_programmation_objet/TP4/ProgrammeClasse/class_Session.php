<?php

class Session {
    private int $numero ;
    private int $nbMax ;
    private string $dateDebut ; 
    private array $lesParticipants;

public function __construct(int $unNumero , int $unNbMax , string $uneDate){
    $this -> numero = $unNumero ;
    $this -> nbMax = $unNbMax ; 
    $this -> dateDebut = $uneDate ; 
    $this -> lesParticipants = [] ;
    } 

public function ajouteParticipant (Participant $nouveauParticipant){
    $this -> lesParticipants[]= $nouveauParticipant ;
    $nouveauParticipant->set_laSession($this);
}

public function toStringSession() {
    return "Numéro de session: " . $this->numero . ", Nombre max de participants: " . $this->nbMax . ", Date de début: " . $this->dateDebut;
}

public function getNumero(){
    return $this -> numero ; 
}

public function getnbMax(){
    return $this -> nbMax ;
}

public function getDateDebut(){
    return $this -> dateDebut ;
}

public function get_participant($i){
    return $this -> lesParticipants[$i];
}

public function EstPleine(){
    if ((count($this -> lesParticipants) < $this -> nbMax )){
        return False ;
    }
    else{
        return True ;
    }
}

}