<?php
#définition de la fonction en fonction des variables
function calculatrice ($valeur1 , $signe_opération , $valeur2) {
switch ($signe_opération) {
case "+":
    return $valeur1 + $valeur2;
    break;
case "-" :
    return $valeur1 - $valeur2;
    break;
case "*" :
    return $valeur1 * $valeur2;
    break;
case "/" :
    if ($valeur2==0) {
        print"division par zéro impossible";
    }
else {
    return $valeur1 / $valeur2;
}
}
}
#entré des variables
print("voulez vous commencer ? \n");
$reponse=trim(fgets(STDIN));
while ($reponse == "oui") {
$valeur1=trim(fgets(STDIN));
$signe_opération=trim(fgets(STDIN));
$valeur2=trim(fgets(STDIN));
$résultats=calculatrice($valeur1 , $signe_opération , $valeur2);
print($résultats);
print("\n voulez vous continuez ? \n");
$reponse=trim(fgets(STDIN));
}
?>