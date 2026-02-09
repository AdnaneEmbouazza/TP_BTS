<?php

class Participant {
    private string $name ;
    private string $surname;
    private int $seniority ;
    private ?Session $laSession ; 
    private array $lesChoix ;

function __construct(string $unNom , string $unPrenom , int $uneAncienneté ){
    $this -> name = $unNom ;
    $this -> surname = $unPrenom ; 
    $this -> seniority = $uneAncienneté ;
    $this -> lesChoix = [] ;
    $this -> laSession = null ; 
    }

public function remplirChoix(Session $unChoix){
    $this -> lesChoix[] =  $unChoix ;
}

public function get_Seniority(){
    return $this -> seniority ;
    }

public function get_ChoixSession( int $index ) {
    return $this -> lesChoix[$index];
    }

public function set_laSession(Session $uneSessionChoisie){
    $this -> laSession = $uneSessionChoisie ;
    }

public function get_Name(){
    return $this -> name;
}

public function get_Surname(){
    return $this -> surname;
}

public function get_Choix(){
    return $this -> lesChoix ;
}

public function toStringParticipant() {
    return "Nom: " . $this->name . ", Prénom: " . $this->surname . ", Ancienneté: " . $this->seniority;
}
 
public function get_laSession() {
    return $this->laSession;  
}
}