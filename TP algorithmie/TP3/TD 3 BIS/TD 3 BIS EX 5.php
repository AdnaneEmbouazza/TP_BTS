<?php
// définition des variables
print("voulez vous effectuer un calcul ?\n ");
$entree_boucle=trim(fgets(STDIN));
print("veuillez saisir un nombre \n ");
while ($entree_boucle=="oui") {
    $nombre_initiale=trim(fgets(STDIN));
    $a=1;
    $somme=0;
do {
	$somme=$somme+$a;
	$a++;
}
while ($a<=$nombre_initiale);
print($somme);
print("\nvoulez vous continuer");
$entree_boucle=trim(fgets(STDIN));
}
?>