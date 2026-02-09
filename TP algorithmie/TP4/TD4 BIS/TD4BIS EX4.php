<?php

#constante définie
define("taux_euro_dollars" , 1.09);

#choix de la monnaie de départ
echo("taper 1 pour convertir en dollars\n");
echo("taper 2 pour convertir en euros \n");

$a=trim(fgets(STDIN));
print"entrer la somme à convertir \n";
$montant=trim(fgets(STDIN));

#définition de la fonction 
function conversion($montant,$a) {
    if($a==1) {
        $montantconvertie=$montant*taux_euro_dollars;
    }
    else {
        if($a==2) {
            $montantconvertie=$montant/taux_euro_dollars;  
        }
    }
    return $montantconvertie;  
}

print" la somme convertie est de " . conversion($montant,$a);
?>