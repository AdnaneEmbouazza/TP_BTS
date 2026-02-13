<?php
in
$tabAccess = fichierVersTableau();
//var_dump($tabAccess);
$statIP = array();
foreach ($tabAccess as $ligne) {
    $ip = $ligne["remotehost"];
    if (array_key_exists($ip, $statIP)) {
        $statIP[$ip]+=1;
    } else {
        $statIP[$ip] = 1;
    
    }

}

?>
