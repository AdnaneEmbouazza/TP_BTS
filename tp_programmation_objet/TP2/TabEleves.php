<?php

include "Eleve.php";

class TabEleves {
    private array $tabE=[];
    private int $nbreE;


function __construct() {
    $this-> tabE = [];
    $this-> nbreE = 0;
    }

public function getNbre(){
    return $this->nbreE;
    }

public function AddEleves(Eleve $newEleve) {
    if(count($this-> tabE)<=35){
    $this->tabE[]=$newEleve;
    $this-> SortEleves($this->tabE);
    $this->nbreE++;
    }   
}

private function SortEleves(array &$tableau ){
    $i=count($tableau)-1;
    while($i>0 && $tableau[$i]->getNote()>$tableau[$i-1]->getNote()){
        $temp=$tableau[$i];
        $tableau[$i]=$tableau[$i-1];
        $tableau[$i-1]=$temp;
    }
}


public function EleveValue($i){
    return $this-> tabE[$i];

    }


public function DeleteEleve($i){
    if ($i>=0 && $i < $this->nbreE){
        for($j=$i;$j<$this-> nbreE-1; $j++){
            $this->tabE[$j]=$this->tabE[$j+1];
        }
    }
    unset($this->tabE[$this->nbreE-1]);

    $this->nbreE--;
    }

public function saisieEleve(){
    print("Veuillez saisir le nom de l'élève : ");
    $nomEleve = trim(fgets(STDIN));

    print("Veuillez saisir la note de l'élève : ");
    $noteEleve = trim(fgets(STDIN));

    $New_Eleve = new Eleve($nomEleve, $noteEleve);
    $this->AddEleves($New_Eleve);
    }

public function results(){
    $max = $this->tabE[0]->getNote();
    $min = $this->tabE[0]->getNote();
    $somme = 0;

    $index = [0,0]; // [MIN,MAX] <<< L'index

    for ($i = 0; $i < $this->getNbre(); $i++){
        // MAX
        if ($this->tabE[$i]->getNote() > $max){
            $max = $this->tabE[$i]->getNote();
            $index[1] = $i;
        }
        // MIN
        if ($this->tabE[$i]->getNote() < $min){
            $min = $this->tabE[$i]->getNote();
            $index[0] = $i;
        }
        // SUM
        $somme += $this->tabE[$i]->getNote();
    }

    $moy = $somme / $this->getNbre();

    print("\nLa pire note est $min/20. C'est la note de ". $this->tabE[$index[0]]->getNomE());
    print("\nLa meilleure note est $max/20. C'est la note de ". $this->tabE[$index[1]]->getNomE());
    print("\nLa moyenne est de $moy/20 \n");
}

public function afficher(){
    print_r($this->tabE);
    }
}