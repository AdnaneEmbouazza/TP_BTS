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

function max_tableau($tab) {
    $max=$tab[0];
    for($i=0;count($tab)>$i;$i++) {
        if ($max<$tab[$i]) {
            $max=$tab[$i];
        }
    }
    print("la plus grande valeur du tableau est $max");
}
$tableau1=tableau();
print_r($tableau1);
max_tableau($tableau1);
?>