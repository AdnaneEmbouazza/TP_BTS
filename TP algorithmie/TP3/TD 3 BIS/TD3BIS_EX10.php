<?php
print("saisir le nombre de cheveaux partants :");
$nombrechev = trim(fgets(STDIN));
print("saisir le nombre de cheveaux jouer ");
$chevjouer = trim(fgets(STDIN));

$k = $nombrechev - $chevjouer ;

function factorielle($fact) {
    for ($i=$fact-1 ; $i >= 1 ; $i-- ) {
        $fact= $fact * $i ;
}
return $fact ;
}


$x= factorielle($nombrechev)/ factorielle($k) ;
$y= factorielle($nombrechev)/ (factorielle($chevjouer)* factorielle($k) );

print(" Dans l'ordre : une chance sur $x de gagner \n ");
print(" Dans le desordre : une chance sur $y de gagner ");

?>