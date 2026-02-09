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
); 

foreach($tableau as $cle1 => $ligne1){
    print("\n"."ligne" . $cle1 ."\n");
    foreach($ligne1 as $cle2 => $valeur){
        print("indice n°" . $cle2 .",valeur: " . $valeur . "\n");
    }
}

?>