<?php

$fic = fopen("access.log", "r");
$i= 0;// compteur de ligne 

while (!feof($fic)){
    $ligne=fgets($fic, 1024);
    if(preg_match('/" 404/' , $ligne)){
        $i++.
        preg_match('/GET \/[a-zA-ZO-9._-]*/' , $ligne , $matches);
        var_dump($matches);
    }
}
var_dump($i);
fclose($fic);

?>