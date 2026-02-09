<?php
#constante définie
define("taux_euro_livre" , 0.84);
define("taux_livre_euro" , 1.19);
#choix de la monnaie de départ
do {
echo("taper 1 pour convertir en livres \n");
echo("taper 2 pour convertir en euros \n");
$a=trim(fgets(STDIN));
$montant=trim(fgets(STDIN));
if($a==1) {
    $montantconvertie=$montant*taux_euro_livre;
}
else {
    if($a==2) {
        $montantconvertie=$montant*taux_livre_euro;  
    }
}
print("$montantconvertie \n ");  

print("voulez vous continuer ?");
$i=trim(fgets(STDIN));
}
while ($i!="non");
?>