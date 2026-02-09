<?php

class Station {

    private int $idStation ;
    private string $libelleEmplacement ;
    private array $lesBornes;

    public function ($id , $libelle , $bornes){
        $this -> idStation = $id ;
        $this -> libelleEmplacement = $libelle ;
        $this -> lesBornes = [];
    }

    public function getLibelleEmplacement(){
        return $this->libelleEmplacement ;
    }

    public function getId(){
        return $this-> idStations;
    }

    public function getVisiteaFaire(){
        $tabBornes = [];
        $dureeTotal = 0;
        foreach($this-> lesBornes as $uneBorne){
            if ($uneBorne -> estaReviser()){
                $tabBornes [] = $uneBorne;
                $dureeTotal+= $uneBorne->getDureeRevision();
            }
        }

        return new Visite("p" , $dureeTotal , $this , $tabBornes);
    }
}