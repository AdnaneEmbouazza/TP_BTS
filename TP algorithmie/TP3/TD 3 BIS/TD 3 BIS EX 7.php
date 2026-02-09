<?php
$stock=0;
for($i=1; $i<=20; $i++) {
    print("saisir la valeur \n");
    $valeur=trim(fgets(STDIN));
    
    if ($valeur>$stock) {
        $stock=$valeur;
        $max=$i;
    }

}
print("la valeur la plus élevé est $stock \n");
print ("la valeur la plus élevé est à la $max ème position");
?>