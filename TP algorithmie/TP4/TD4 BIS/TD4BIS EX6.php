<?php

# TD4BIS EX6 capital affiché en fonction des pays
function Capitale($pays) {
    switch($pays) {
        case "france" : 
            print "capitale : paris" ;
            break;
        case "italie" :
            print "capitale : Rome" ;
            break ;
        case "Espagne" :
            print "Capitale : Madrid ";
            break ;
        case "Allemagne" :
            print "capitale : Berlin" ;
            break;
        case "Portugal" :
            print "capitale : Lisbonne" ;
            break;
        case "Pologne" :
            print "capitale : Varsovie " ;
            break;
        case "République Tchèque " :
            print "capitale : Prague " ;
            break;
        case "Angleterre" :
            print "capitale : Londres " ;
            break;
        case "Pays-Bas":
            print "capitale : Amsterdam " ;
            break;
        default :
            print "Cette capitale ne doit pas être « capitale », elle s est échappée de mon capital mémoire ».";
            break;
    }
}
print "veuillez entrez un pays :\n " ;
$pays=strtolower(trim(fgets(STDIN)));

Capitale($pays);

?>