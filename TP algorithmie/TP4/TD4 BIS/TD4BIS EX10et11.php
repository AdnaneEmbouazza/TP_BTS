<?php
function valpositive($tableau,$compteur){
    for($i=0;$i<count($tableau);$i++) {
    if($tableau[$i]>=0) {
        $compteur++;
        }
    }
    return $compteur;
}

function valnegative($tableau,&$compteur1) {
    for($i=0;$i<count($tableau);$i++) {
    if($tableau[$i]<0) {
        $compteur1++;
        }
    }
}

$compteur=0;
$compteur1=0;
$tableau=array(1,-5,4,5,8,12,-36,-14,-7,-8);
print valpositive($tableau,$compteur);
valnegative($tableau,$compteur1);
print("\n$compteur1");