<?php

class Borne {
    
    private int $idBorne ;
    private string $dateDerniereRevision ;
    private int $IndiceCompteurUnite ;
    private TypeBorne $leType ;

    public function __construct(int $idBorne , string $date , int  $indice , TypeBorne $leType){
        $this -> idBorne = $idBorne ;
        $this -> dateDerniereRevision = new DateTime($date);
        $this-> IndiceCompteurUnite = $indice ;
        $this -> leType = $leType ;
    }

    public function getDureeRevision(){
        return $this->leType->getDureeRevsion();
    }

    public function estaReviser():bool{
        $dateAujourdhui = new DateTime();
        return($dateAujourdhui - $this->dateDerniereRevision >$this->leType->getnbJoursEntreRevisions() 
              || $this->IndiceCompteurUnite > $this->$leType->getnbUniteEntreRevision());
    }
}