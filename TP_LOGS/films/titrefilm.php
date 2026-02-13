<?php
$fp = fopen("films.txt", "r");

while (!feof($fp)) {
    $ligne = fgets($fp, 1024);
    if (trim($ligne) == "") continue;
    $elements = explode(" ", $ligne);
    $titre = $elements[0];
    echo $titre . "\n";
}

fclose($fp);

?>
