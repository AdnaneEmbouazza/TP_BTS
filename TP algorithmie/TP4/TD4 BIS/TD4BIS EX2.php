<?php

function fact ($fact,&$resultats) {
    for($i=$fact-1 ; $i>=1 ; $i--) {
        $fact= $fact *$i ;
    }
    $resultats=$fact ;
    return $resultats;
}

print"veuillez saisir une valeur \n" ;
$factorielle=trim(fgets(STDIN));
$res=0;
print fact($factorielle,$res);