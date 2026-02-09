<?php
define("Lim1" , 2000);
define("Lim2" , 10000);
define("Lim3" , 20000);
define("T1" , 0.05);
define("T2" , 0.10);
define("T3" , 0.25);
$CA=trim(fgets(STDIN));
if ($CA<2000) {
    $Prime="pas de prime";
    }
    elseif (
        ($CA>2000) && ($CA<10000)
    )
    $Prime=T1*($CA-Lim1);
    elseif (
        ($CA>10000) && ($CA>20000)
    )
    $Prime=T2*($CA-Lim2)+T1*(Lim2-Lim1);
    elseif (
        ($CA<=20000)
    )
    $Prime=T3*($CA-Lim3)+T2*(Lim3-Lim2)+T1*(Lim2-Lim1);
print("la prime à toucher est de $Prime");
?>