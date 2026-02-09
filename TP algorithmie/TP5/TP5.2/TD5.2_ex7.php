<?php

function tableau() {
print("veuillez saisir le nombre de valeurs à rentrer : \n");
$nbre_total=trim(fgets(STDIN));

// debut de la boucle 
$limite=0;
do {
    print" veuillez saisir une valeur";
    $valeur[]=trim(fgets(STDIN));
    $limite++;
}
while($limite<$nbre_total);
return $valeur ;
}

function max_tableau(&$tab) {
    $moyenne=0;
    $total=0;
    for($i=0;count($tab)>$i;$i++) {
        $moyenne+=$tab[$i];
        }
    
    $moyenne=$moyenne/$i;
for($i=0;count($tab)>$i;$i++) {
    if ($tab[$i]>$moyenne) {
        $total++;
        }
        }
        print("le nombre de note au dessus de la moyenne est $total");
}
$tableau1=tableau();
max_tableau($tableau1);
?>