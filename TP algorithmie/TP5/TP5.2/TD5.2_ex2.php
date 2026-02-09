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

$tableau1=tableau();
$total=0;
$i=0;
do {
    $total+=$tableau1[$i];
    $i++;
}
while(count($tableau1)>$i);
print"$total";
?>