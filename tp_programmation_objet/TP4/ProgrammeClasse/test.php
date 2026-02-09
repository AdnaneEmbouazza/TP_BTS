<?php

include_once "class_Session.php";
include_once "class_Participant.php";
include_once "class_Formation.php";

$formation1= new Formation ("A1","BTS_SIO",150);

$formation1 -> addInscrits();
$formation1 -> addSessions();
$formation1 -> remplirChoixMultiple($formation1 -> get_mesSessions());
$formation1 -> AffecteParticipants();
print($formation1 -> toStringFormation());