<?php

class Eleve {
    private string $nomE;
    private float $noteE;


function __construct(string $nomEleve, float $noteEleve) {
    $this-> nomE = $nomEleve;
    $this-> noteE = $noteEleve;
    }

public function getNomE():string{
    return $this->nomE;
    }

public function getNote():float{
    return $this->noteE;
    }

}