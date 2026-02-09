<?php

class Categorie {
    private int $codeCat ;
    private string $libelleCat ;
    private array $lesJouets ;

    public function __construct(int $codeCat , string $libelle){
        $this->codeCat = $codeCat ;
        $this->libelleCat = $libelle ;
        $this->lesJouets = [];
    }

    public function getCode():int{
        return $this-> codeCat ;
    }

    public function getLibelle():string{
        return $this-> libelleCat ;
    }

    public function ajouterJouets(Jouet $unJouets):void{
        $this->lesJouets[] = $unJouets;
    }
    
}