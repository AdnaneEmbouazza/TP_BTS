<?php

include "classGenre.php";

class Etagere{
    private int $number ;
    private array $lesGenres ;

public function __construct(int $NumberEtagere ){
    $this->number = $NumberEtagere ;
    $this->lesGenres = [] ;
    }

public function getNumber():int{
    return $this->number;
    }

public function getGenres():array{
    return $this -> lesGenres;
    }

public function addGenre($NewGenre):void{
    $this-> lesGenres[] = $NewGenre;
    }

public function getPreciseGenre($i){
    return $this -> lesGenres[$i];
    }
}