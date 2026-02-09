<?php
$tableau=array();
for($i=0;$i<9;$i++) {
    do {
        print"\nsaisir une valeur\n";
        $tableau[$i]=trim(fgets(STDIN));
    }
    while($tableau[$i]<0 && $tableau[$i]>20);
    print $tableau[$i];
}
?>