<?php

print"veuillez saisir le nombre à mettre à la puissance 3/6/9 : " ;
$nb = trim(fgets(STDIN));

function CUBE ($nb) {
    $resultats = $nb * $nb * $nb;
    return $resultats ;
}

$a= CUBE($nb);
$b= CUBE($nb)*CUBE($nb);
$c= CUBE($nb)*CUBE($nb)*CUBE($nb);

print("$a\n$b\n$c");
?>