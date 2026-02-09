<?php

class TypeBorne {
    
    private string $codeTypeBorne;
    private int $dureeRevision ;
    private int $nbJoursEntreRevisions ;
    private int $nbUniteEntreRevisions ;

    public function __construct($code , $duree , $nbJours , $nbUnite){
        $this -> codeTypeBorne = $code ;
        $this -> dureeRevision = $duree ;
        $this -> nbJoursEntreRevisions = $nbJours ;
        $this -> nbUniteEntreRevisions = $nbUnite ;
    }

    public function getDureeRevsion(){
        return $this-> dureeRevision ;
    }

    public function getnbJoursEntreRevisions(){
        return $this-> nbJoursEntreRevisions;
    }

    public function getnbUniteEntreRevision(){
        return $this-> nbUniteEntreRevisions;
    }

    
}