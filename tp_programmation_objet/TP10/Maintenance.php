<?php

class Maintenance {
    private array $lesStations ;
    private array $lesTechniciens ;
    private array $lesVisites ;

    public function __construct(){
    $this -> lesStations = [];
    $this -> lesTechniciens = [];
    $this -> lesVisites = [] ;
    }
    
    public function reviser(){
        foreach($this->lesStations as $uneStation){
            $this-> lesVisites[]= $uneStation -> getVisiteaFaire();
        }
    }

    public function addTechnicien(Technicien $unTechnicien){
        $this->lesTechniciens [] = $unTechnicien;
    }

    public function affecterVisites(){

        $dureeTech=[];

        foreach($this->lesTechniciens as $unTechnicien){
            $dureeTech[] = $unTechnicien -> getTempsOccupe();
        }

        for($i=0;$i<count($this->lesVisites);$i++){
            $index= array_search(min($dureeTech) , $dureeTech);
            $this->lesTechnicien[$index]->affecterVisite($this->lesVisites[$i]);
            $dureeTech[$index] += $this->lesVisites[$i]->getDureeTotal();
        }
    }
    
}