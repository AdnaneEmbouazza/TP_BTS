<?php
#Exercice 4 TD3 BIS
print("entrer un nombre \n ");
print("\n table de multiplication \n");
define("nombre" , trim(fgets(STDIN)));
for(nombre, $a=0, $b=0; $a<=10; $a++) {
    print("$a * ") . nombre;
    $b=nombre * $a;
    print("= $b \n ");
}
?>