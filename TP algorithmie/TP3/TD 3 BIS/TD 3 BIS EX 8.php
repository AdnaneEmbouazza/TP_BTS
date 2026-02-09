<?php
$stock=0;
$valeur=1;
$i=1;
while($valeur!=0) {
    print("saisir la valeur \n ");
    $valeur=trim(fgets(STDIN));
    
    if ($valeur>$stock) {
        $stock=$valeur;
        $max=$i;
    }
     $i++;
}
print("la valeur la plus élevé est $stock \n");
print ("la valeur la plus élevé est à la $max ème position");
?>