<?php
# exercice 2 TD 3 BIS
$nombre="";
 while ($nombre>=10 || $nombre<=20) {
    print("\n veuillez saisir un nombre \n");
    $nombre=trim(fgets(STDIN));
    if ($nombre<10) {
       print("PLUS GRAND ! \n");
    }
    elseif ($nombre>20) {
        print("PLUS PETIT ! \n");
    }
    else {
        print("$nombre");
        break;
    } 
}
?>
