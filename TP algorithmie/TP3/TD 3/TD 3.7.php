<?php
$prime_total=0;
define ("nbcommerciaux" , 5);
define("Lim1" , 2000);
define("Lim2" , 10000);
define("Lim3" , 20000);
define("T1" , 0.05);
define("T2" , 0.10);
define("T3" , 0.25);
for($i=1 ; $i <= nbcommerciaux ; $i++) {
    print("\n valeur du chiffre d'affaire ");
$CA=trim(fgets(STDIN));
if ($CA<Lim1) {
    $Prime="pas de prime";
    }
    elseif (
        ($CA < Lim2)
    )
    $Prime=T1*($CA-Lim1);
    elseif (
        ($CA < Lim3)
    )
    $Prime=T2*($CA-Lim2)+T1*(Lim2-Lim1);
    else (
    $Prime=T3*($CA-Lim3)+T2*(Lim3-Lim2)+T1*(Lim2-Lim1)
    );
print("la prime à toucher est de $Prime \n" );
$prime_total =$prime_total + $Prime;
}
$prime_moyenne=$prime_total / nbcommerciaux ;
print("la moyenne est de $prime_moyenne") ;
?>