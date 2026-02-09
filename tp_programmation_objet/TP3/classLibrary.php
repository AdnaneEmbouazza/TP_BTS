<?php

include "classGenre.php";
include "classBook.php";
include "classEtagere.php";

class Library {
    private array $mesEtageres;

public function __construct(){
    $this-> mesEtageres = [];
    $this-> mesEtageres -> addEtagere($this);
    }

public function addEtagere($newEtagere){
    $this -> mesEtageres []= $newEtagere;
    }
    
public function getGenre(string $libelle){
    for($i=0; $i<count($this->mesEtageres)-1 ; $i++){
        for($j=0 ; $j<count($this-> mesEtageres[$i] -> getGenres())-1 ; $j++){
            if($libelle == $this-> mesEtageres[$i] -> getPreciseGenre($j)-> getLibel()){
                return $this-> mesEtageres[$i] -> getPreciseGenre($j);
                }
            }
        }
    }


public function NewBook(string $titleBook , string $libelleGenre ){
    return (new Book ($titleBook , $this->getGenre( $libelleGenre)));
    } 
}

