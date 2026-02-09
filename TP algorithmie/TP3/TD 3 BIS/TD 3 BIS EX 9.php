<?php

$somme=0;
do {
    print("veuillez entrez le prix de l'article : \n");
    $valeur=trim(fgets(STDIN));
    $somme=$somme + $valeur;
    print("avez vous d'autre article ? \n");
    $stop=trim(fgets(STDIN));
}
while ($stop=="oui");

print(" le montant à payer est égale à $somme € ");
print ("combien allez vous donner ?");
$montant=trim(fgets(STDIN));
if ($montant<$somme) {
    print("veuillez donner une somme supérieur au montant");
}
else {
$monnaie=$montant-$somme;
}
while ($monnaie != 0) {
    if($monnaie>=10) {
        $monnaie=$monnaie-10;
        print("je te redonne 10euros");
    }
    elseif ($monnaie>=5) {
        $monnaie=$monnaie-5;
        print("je te redonne 5 euros");
    }
    elseif ($monnaie>=1) {
        $monnaie=$monnaie-1;
        print("je te redonne 1 euros");
    }
}
?>