<?php

$fic = fopen("ssh.log", "r");
$statIP = array();
while (!feof($fic)) {
 $ligne = fgets($fic, 1024);
 //presence de "failed password for root"
 if (preg_match('/Failed password/', $ligne)) {
 //extraction de l'IP
 preg_match('/[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}/', $ligne, $lesIP);
 $ip=$lesIP[0]; //attention $lesIP est un tableau
 //comptage par IP
 if (array_key_exists($ip, $statIP)) {
 $statIP[$ip] = $statIP[$ip] + 1;
 } else {
 $statIP[$ip] = 1;
 }
 }
}
fclose($fic);
var_dump($statIP);

?>