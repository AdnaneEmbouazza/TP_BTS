<?php

# tp 4BIS EX 3 réutiliser les 2 derniers algorithmes

print"veuillez saisir une valeur \n" ;
$factorielle=trim(fgets(STDIN));
$res=0;

function fact ($fact,&$resultats) {
    for($i=$fact-1 ; $i>=1 ; $i--) {
        $fact= $fact *$i ;
    }
    $resultats=$fact ;
}

function fact1 ($fact,&$resultats) {
    for($i=$fact-1 ; $i>=1 ; $i--) {
        $fact= $fact *$i ;
    }
    $resultats=$fact ;
    return $resultats;
}
print"fonction fact1 résultats : \n";
print fact1($factorielle,$res);
print "\n procéduere fact résultats :";
fact($factorielle,$res);
print "\n$res";

?>