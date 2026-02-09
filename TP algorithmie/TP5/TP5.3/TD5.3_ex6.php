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


$tableau = array( 
    1 => tableau(), 
    2 => tableau(),
    3 => tableau(),
    4 => tableau(),
    5 => tableau(),
    6 => tableau(),
    7 => tableau(),
    8 => tableau(),
    9 => tableau(),
    10 => tableau(),
    11 => tableau(),
    12 => tableau(),
); 

$max=$tableau[1][0];

foreach($tableau as $cle1 => $ligne1){
    foreach($ligne1 as $cle2 => $valeur){
        if ($valeur>$max){
            $max=$valeur;
        }   
    }
}

print("la plus grande valeur du tableau est " . $max);

?>