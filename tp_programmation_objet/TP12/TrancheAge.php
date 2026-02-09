<?php

class TrancheAge{
    private int $codeAge ; 
    private int $ageMin ;
    private int $ageMax ;

    public function __construct($codeAge , $ageMin , $ageMax){
        $this-> codeAge = $codeAge ;
        $this-> ageMin = $ageMin ;
        $this-> ageMax = $ageMax ;
    }

    public function getAgeMin (){
        return $this-> ageMin ;
    }

    public function getAgeMax(){
        return $this -> ageMax ;
    }

    public function getCodeAge(){
        return $this -> codeAge ;
    }

}