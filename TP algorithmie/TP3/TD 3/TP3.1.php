<?php

// début de la boucle 
for($a=0 , $b=0 ; $a<3 ; $a++) {
	$c=trim(fgets(STDIN));
	$b= $b+$c;
}
print($b);
?>