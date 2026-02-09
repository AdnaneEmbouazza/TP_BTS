<?php

class caserne {
    private array $lesPompiers;

    public function __construct(){
        $this -> lesPompiers = [];
    }

    private function appeler(string $NumBip){
        $i=0;
        foreach($this -> lesPompiers as $unPompier){
            if ($unPompier -> getNumeroBip() != $NumBip){
                print("nom et prenom du pompier : " . $unPompier -> getNom() . " " . $unPompier-> getPrenom . "\n" .
                      "numero de BIP : " . $unPompier -> getNumeroBip());
            }
        }
    }

    public function appelleEquipe(periode $unePeriode , int $nbPompiers){
        $Equipe = $unePeriode -> SelectEquipe($nbPompiers);
        foreach($Equipe as $Pompier){
            $Pompier -> Missioner($unePeriode);
            $this->appeler($Pompier ->getNumeroBip());
        }
        return count($Equipe);
    }

}