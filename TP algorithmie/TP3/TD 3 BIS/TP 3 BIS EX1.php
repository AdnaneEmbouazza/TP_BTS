<?php
 #exercice 1 TD 3 BIS 
 $nombre="";
 while ($nombre>=1 || $nombre<=3) {
   print("veuillez saIsir un nombre ");
     $nombre=trim(fgets(STDIN));
    if ($nombre<1 || $nombre>3) {
        print("veuillez ressaisir une valeur");
        break; }
        else {
            print("$nombre");
        }
 }
