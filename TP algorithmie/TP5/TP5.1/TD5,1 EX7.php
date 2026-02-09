<?php
$tableau=array();
$stock=0;
for($i=0;$i<9;$i++) {
    do {
        print"\nsaisir une valeur\n";
        $tableau[$i]=trim(fgets(STDIN));
    }
    while($tableau[$i]<0 || $tableau[$i]>20);
    $stock+=$tableau[$i];
}
$moyenne=$stock / 9;
print"la moyenne est de $moyenne sur 20 ";
?>