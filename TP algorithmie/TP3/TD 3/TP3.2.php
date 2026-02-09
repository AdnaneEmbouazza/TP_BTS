<?php
// définition des variables

$a=0;
$note=0;
while($a<3) {
$c=trim(fgets(STDIN));
$note=($note+$c); 
$a++ ;
}
$moyenne=$note/$a;
print("la moyenne est de . $moyenne ");
?>