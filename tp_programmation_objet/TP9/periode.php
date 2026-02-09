<?php

class periode {

    private $laDate ;
    private int $laTranche ;
    private array $enMission ;
    private array $auTravail ;
    private array $Disponible;

    public function __construct($uneDate , $uneTranche ){
        $this -> laDate = new DateTime($uneDate);
        $this -> laTranche = $uneTranche ;
        $this -> enMission = [];
        $this -> auTravail = [];
        $this -> Disponible = [];
    }

    public function getEnMission(){
        return $this -> enMission;
    }

    public function getAuTravail(){
        return $this -> auTravail ;
    }

    public function getDispo(){
        return $this -> Disponible ;
    }

    public function getStatut(pompier $unPompier){
        foreach($this-> enMission as $mission){
            if ($mission == $unPompier){
                return "m";
            }
        }
       foreach($this-> $auTravail as $travail){
            if ($travail == $unPompier){
                return "t";
            }
        }
        foreach($this-> $Disponible as $dispo){
            if ($dispo == $unPompier){
                return "d";
            }
        }
    print("le Pompier n'est dans aucun des statuts ");
    return 0 ;
    }

    public function Missionner(pompier $unPompier){
        $statut = $this-> getStatut($unPompier);
        $i=0;

        if ($statut == "d"){
            while( $this->Disponible[$i] !=  $pompier){
                $i++;
            }

            $this-> EnMission[] = $this-> Disponible[$i];

            for($j=$i ; $j < count($this->Disponible)-1 ; $j++){
                $this-> Disponible[$i] = $this-> Disponible[$i+1];
            }
            unset(count($this->Disponible)-1) ;
        }

        if ( $statut == "t"){
            while( $this->auTravail[$i] !=  $pompier){
                $i++;
            }

            $this-> EnMission[] = $this-> auTravail[$i];

            for($j=$i ; $j < count($this->auTravail)-1 ; $j++){
                $this-> auTravail[$i] = $this-> auTravail[$i+1];
            }
            unset(count($this->auTravail)-1) ;
        }
    }

    public function SelectEquipe(int $nbEntiers){
        $equipePompiers = [];

        foreach($this-> $Disponible as $dispo){
                $equipePompiers[] = $dispo;
                if(count($equipePompiers == $nbEntiers)){
                    return $equipePompiers ;
                }
            }
        foreach($this-> $auTravail as $travail){
                $equipePompiers[] = $travail;
                if(count($equipePompiers == $nbEntiers)){
                    return $equipePompiers ;
                }
            }
        return $equipePompiers;
    }

    
}
