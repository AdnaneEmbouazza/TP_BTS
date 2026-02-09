<?php

function tableau() {
print("veuillez saisir le nombre de valeurs à rentrer : \n");
$nbre_total=trim(fgets(STDIN));

// debut de la boucle 
$limite=0;
do {
    print" veuillez saisir une valeur";
    $valeur[]=trim(fgets(STDIN));
    $limite++;
}
while($limite<$nbre_total);
return $valeur ;
}

$tableau1=tableau();
$tableau2=tableau();
$total=0;

for($i=0;count($tableau1)>$i;$i++) {
    for ($j=0;count($tableau2)>$j;$j++) {
        $total+=$tableau1[$i]*$tableau2[$j];
}
}
print("$total");
?>