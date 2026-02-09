<?php

print("veuillez saisir le nombre de valeurs à rentrer : \n");
$nbre_total=trim(fgets(STDIN));

// debut de la boucle 
$compteur_pos=0;
$compteur_neg=0;
$limite=0;
do {
    print" veuillez saisir une valeur";
    $valeur[]=trim(fgets(STDIN));
    if ($valeur[$limite]<0) {
        $compteur_neg++;
    }
    elseif ($valeur[$limite]>0) {
        $compteur_pos++;
    }
    $limite++;
}
while($limite<$nbre_total) ;
print "le nombre total de valeur négatif est de  $compteur_neg \n " ;
print"le nombre total de valeur positif est de $compteur_pos \n";
print_r($valeur);
?>