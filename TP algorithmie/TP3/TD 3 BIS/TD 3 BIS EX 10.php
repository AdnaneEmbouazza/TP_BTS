<?php

do {
print("a quel jeu vous voulez jouer ? \n");
$cheveaux_jouer=trim(fgets(STDIN));

while ($cheveaux_jouer<3 || $cheveaux_jouer>5);

print("combien de chevaux participent à la course ? \n");
$nbre_chevaux=trim(fgets(STDIN));

for($a=1,$total=0;$a<=$nbre_chevaux,$factorielle=0;$a++) {
	$factorielle=$nbre_chevaux*$a;
    $total+=$factorielle;
    }
    
for($a=1,$total1=0,$soustraction=$nbre_chevaux-$cheveaux_jouer,$factorielle=0;$a<=$nbre_chevaux;$a++) {
    $factorielle=$soustraction*$a;
    $total1+=$factorielle;
}

for ($a=1,$total2=0,$factorielle=0;$a<=$cheveaux_jouer;$a++) {
    $factorielle=$cheveaux_jouer*$a;
    $total2+=$factorielle;
}

$chance_ordre= $total / $total1;
$chance_desordre= $total / ($total2 * $total1);

print ("les chances de gagner dans l'ordre sont de 1 chance sur $chance_ordre");
print ("les chances de gagner dans le desordre sont de 1 chance sur $chance_desordre");
} 
