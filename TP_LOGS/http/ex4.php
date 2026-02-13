<?php

//retourne un tableau de tableaux associatifs
function fichierVersTableau() {

    $fic = fopen("access.log", "r");
    $tabAccess = array();
    $i = 0; //Compteur de ligne 
    while (!feof($fic)) {
        $ligne = fgets($fic, 1024);
        $tabLigne = explode(" ", $ligne);
        $tabAccess[$i]["remotehost"] = $tabLigne[0];
        $tabAccess[$i]["request"] = $tabLigne[5];
        $tabAccess[$i]["status"] = $tabLigne[8];
        $i++;
    }
    fclose($fic);
    return $tabAccess;
}

//main
$tabAccess = fichierVersTableau();
var_dump($tabAccess);

$statIP = array();
foreach($tabAccess as $ligne ){
    $ip = $ligne["remotehost"];
    if(array_key_exists($ip , $statIP)){
        $statIP[$ip] = $statIP[$ip] + 1;
    }
    else {
        $statIP[$ip] = 1;
    }
}

var_dump($statIP);
?>