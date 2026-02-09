<?php
// définition des variables
print("voulez vous entrez dans la boucle ?");
$entree_boucle=trim(fgets(STDIN));
while ($entree_boucle=="oui") {
$nombre_initial=trim(fgets(STDIN));
$a=1;
$factorielle=1;
do {
	$factorielle=$factorielle*$a;
	$a++;
}
while ($a<=$nombre_initial);
print($factorielle);
print("\nvoulez vous continuer");
$entree_boucle=trim(fgets(STDIN));
}
?>