<?php

#constante définie
define("taux_euro_dollars" , 1.09);

$a=0;
$montant=0;


#définition de la fonction 
function conversion(&$montantconvertie,&$a) {
    do {
        echo("taper 1 pour convertir en dollars\n");
        echo("taper 2 pour convertir en euros \n");
        $a=trim(fgets(STDIN));
        print"entrer la somme à convertir \n";
        $montant=trim(fgets(STDIN));

    if($a==1) {
        $montantconvertie=$montant*taux_euro_dollars;
    }
    else {
        if($a==2) {
            $montantconvertie=$montant/taux_euro_dollars;  
        }
    }
    print "le montant convertie est égale à " . $montantconvertie;
    print "\nvoulez vous continuez ?" ;
    $rep=trim(fgets(STDIN));
    }
    while ($rep=="oui"); 
}

conversion($montantconvertie,$a);
print" la somme convertie est de " . $montantconvertie;
?>