<?php

include "classEtagere.php";
include "classBook.php";


class Genre {
    private string $libelle;
    private Etagere $UneEtagere;
    private array $lesLivres ;


public function __construct(string $libGenre , Etagere $newEtagere ) {
    $this->libelle = $libGenre;
    $this-> UneEtagere = $newEtagere ;
    $this -> lesLivres= [] ;
    $this -> UneEtagere -> addGenre($this) ;
    }

public function getLibel():string{
    return $this->libelle;
    }

public function addLivre($newLivre):void{
    $this -> lesLivres[]=$newLivre;
    }

private function RankBook(string $titlebook):int{
    $i=0;

    while(count ($this -> lesLivres) > 0 && strcmp( $titlebook , $this -> lesLivres[$i] -> getTitle()) > 0  ){
        $i++;
        }
return $i;
    }

public function PlaceBook(Book $newBook){
    $this -> lesLivres[]= $this -> lesLivres[count($this->lesLivres)-1];
    RankBook();
    }
}

