<?php

include "classGenre.php";

class Book {
    private string $title ;
    private Genre $leGenre ;

public function __construct( $titleLivre , Genre $GenreLivre){
    $this-> title = $titleLivre;
    $this-> leGenre = $GenreLivre;
    $this-> leGenre -> addLivre($this);
    }

    public function getTitle():string{
        return $this -> title;
    }

}