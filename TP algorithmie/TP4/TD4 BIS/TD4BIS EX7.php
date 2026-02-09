<?php

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

function LimDemande() {
    for ($lim=0 ; $lim <5 ; $lim++) {
        print "\nveuillez entrez un pays (entrer stop pour s arreter) :\n " ;
        $pays=strtolower(trim(fgets(STDIN)));
        if ($pays!="stop") {
            Capitale($pays);
        }
        else {
            break;
        }
    }
}

LimDemande();
?>