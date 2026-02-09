<?php

# TD 4.3 fonction qui retourne le cube d'un nombre 

print"veuillez saisir le nombre à mettre au cubes" ;
$nb = trim(fgets(STDIN));

function CUBE ($nb) {
    $resultats = $nb * $nb * $nb;
    return $resultats ;
}

print CUBE ($nb) ;
?>

