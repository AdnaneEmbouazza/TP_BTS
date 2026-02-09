<?php

function tableau1() {

    for($i=0;$i<10;$i++) {
        if ($i%2==0) {
            $valeur[$i]="O";
        }
        else{
            $valeur[$i]="X";
        }
    }
    return $valeur ;
}

function tableau2() {

    for($i=0;$i<10;$i++) {
        if ($i%2==0) {
            $valeur[$i]="X";
        }
        else{
            $valeur[$i]="O";
        }
    }
    return $valeur ;
}

function tableau3() {

    for($i=0;$i<10;$i++) {
            $valeur[$i]="O";
    }
    return $valeur ;
}

$tableau=[
    0 => tableau2(), 
    1 => tableau1(),
    2 => tableau2(),
    3 => tableau1(),
    4 => tableau3(),
    5 => tableau3(),
    6 => tableau2(),
    7 => tableau1(),
    8 => tableau2(),
    9 => tableau1(),
];

function afficherTableau(&$tableau) {
    echo "\n"; 
    for ($i = 0; $i < 10; $i++) {
        for ($j = 1; $j < 10; $j++) {
            echo $tableau[$i][$j] . " "; 
        }
        echo "\n"; 
    }
}

afficherTableau($tableau);

do {
print("veuillez saisir les coordonées du pion à déplacer \n");
$i=trim(fgets(STDIN));
$j=trim(fgets(STDIN));

if ($tableau[$i][$j]=="O") {
    print("Cette case est vide . Veuillez selectionnez une case avec un pion\n");
    }
}
while (($i < 0 || $i > 9) || ($j < 0 || $j > 9) || $tableau[$i][$j]=="O");

print("Dans quel direction voulez vous allez ? \n 0:en haut à gauche\n 1:en haut à droite\n 2:en bas à gauche\n 3:en bas à droite\n");

$direction=trim(fgets(STDIN));

switch($direction) {
    case 0:
        if (($tableau[$i-1][$j-1]=="X") || ($i-1<0 || $j-1<0)) {
            print("mouvement impossible/infaisable");
        }
        else{
            $tableau[$i][$j]="O";
            $tableau[$i-1][$j-1]="X";
        }
        break;
    case 1:
        if (($tableau[$i-1][$j+1]=="X") || ($i-1<0 || $j+1>9)) {
            print("mouvement impossible/infaisable");
        }
        else{
            $tableau[$i][$j]="O";
            $tableau[$i-1][$j+1]="X";
        }
        break;
    case 2:
        if (($tableau[$i+1][$j-1]=="X") || ($i+1>9 || $j-1<0)) {
            print("mouvement impossible/infaisable");
        }
        else{
            $tableau[$i][$j]="O";
            $tableau[$i+1][$j-1]="X";
        }
        break;
    case 3:
        if (($tableau[$i+1][$j+1]=="X") || ($i+1>9 || $j+1>9)) {
            print("mouvement impossible/infaisable");
        }
        else{
            $tableau[$i][$j]="O";
            $tableau[$i+1][$j+1]="X";
        }
        break;
}

afficherTableau($tableau)

?>