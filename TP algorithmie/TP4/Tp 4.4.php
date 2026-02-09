<?php

# TD 4.4 fonction qui permet de saisir au moins une valeur et de calculer leur moyenne 

Function MOYENNE() {
    $total = 0 ;
    $compteur = 0;
    do {
       print"veuillez saisir une valeur";
       $valeur = trim(fgets(STDIN)) ;
       $total += $valeur ;
       $compteur ++ ;
       print " voulez vous continuez ? " ;
       $entree = trim(fgets(STDIN));
    }
    while ( $entree == "oui") ;
    $moyenne = $total / $compteur ;
    return $moyenne ;
}

echo MOYENNE() ;
?>