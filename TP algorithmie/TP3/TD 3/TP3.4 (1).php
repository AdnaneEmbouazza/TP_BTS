<?php
$moy_generale=0;
$next="";

for ($nbre_eleve=0;$nbre_eleve<30;$nbre_eleve++) {
    if ($nbre_eleve!=0) {
        print(" \n Voulez vous continuer ? : ");
        $next=trim(fgets(STDIN));
    }
    if($next == "non") {
        break;
    }
    else {
        print("\nbulletin des note de l'élève \n");
        for ($lim_note=0,$moyenne_eleve=0,$somme_note=0;$lim_note<5;$lim_note++) {
            do{
                print("Saisir une note entre 0 et 20 : ");
                $note = trim(fgets(STDIN));

                if ($note == "stop"){
                    break 2;
                }

                if ($note < 0 || $note > 20){
                    print("Saisie incorrecte.\n");
                }

            }
            while($note < 0 || $note > 20);
            
            
            print("$note sur 20 \n");
            $somme_note=$somme_note+$note;}
    }
        
    $moyenne_eleve=$somme_note/$lim_note;
    $moy_generale=$moy_generale+$moyenne_eleve;
    print("la moyenne de l'élève est de $moyenne_eleve\n");
    print("nombre de note de l'étudiant: $lim_note\n");
    }
  $moy_generale=$moy_generale/$nbre_eleve;
print("la moyenne générale de la classe est $moy_generale");
?>