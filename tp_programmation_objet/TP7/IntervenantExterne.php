<?php

class IntervenantExterne extends Intervenant{
    private string $specialite ;
    private string $adresse ;
    private string $telephone ;

    public function __construct($nom , $prenom , $specialite , $adresse , $telephone){
        parent::__construct($nom , $prenom );
        $this -> specialite = $specialite ;
        $this -> adresse = $adresse ;
        $this -> telephone = $telephone ;
    }

    public function getSpecialite(){
        return $this -> specialite;
    }

    public function getAdresse(){
        return $this -> adresse ;
    }

    public function getTelephone(){
        return $this -> telephone ;
    }

    
}