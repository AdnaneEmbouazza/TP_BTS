<?php
# exercice 3 TD 3 BIS
print("entrer un nombre \n");
for ($nombre=trim(fgets(STDIN)),$ajout=0; $ajout<10 ; $ajout++) {
    $nombre=$nombre+1;
    print("$nombre \n");
}
?>