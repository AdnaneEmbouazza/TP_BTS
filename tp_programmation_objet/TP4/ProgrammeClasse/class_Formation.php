<?php

class Formation {
    private string $Code ; 
    private string $libelle ; 
    private int $nbJours ; 
    private array $mesSessions ;
    private array $lesInscrits ; 

public function __construct(string $unCode , string $unLibelle , int $nbreJours){
    $this -> Code = $unCode ; 
    $this -> libelle = $unLibelle ;
    $this -> nbJours = $nbreJours ; 
    $this -> mesSessions = [];
    $this -> lesInscrits = [];
}

public function toStringFormation() {

    $sessionsStr = '';
    
    // Parcours de toutes les sessions
    foreach ($this->mesSessions as $session) {
        $sessionsStr .= "Session " . $session->getNumero() . " (" . $session->getDateDebut() . ")\n";
        
        // Récupération des participants de la session
        $participantsInSession = [];
        foreach ($this->lesInscrits as $inscrit) {
            if ($inscrit->get_laSession() === $session) {
                $participantsInSession[] = $inscrit->toStringParticipant();
            }
        }

        // Affichage des participants de cette session
        if (count($participantsInSession) > 0) {
            $sessionsStr .= "Participants:\n" . implode("\n", $participantsInSession) . "\n";
        } else {
            $sessionsStr .= "Aucun participant affecté.\n";
        }
    }

    return "Formation: " . $this->libelle . " (" . $this->Code . "), Durée: " . $this->nbJours . " jours\n" . $sessionsStr;
}

    
public function get_mesSessions(){
    return $this -> mesSessions;
}

public function get_lesInscrits(){
    return $this -> lesInscrits ;
}

public function addInscrits(){
    do {
        print ("saisir les attributs de votre Inscrits\n");
        print ("saisir le nom \n");
        $Aname = trim(fgets(STDIN));
        print ("saisir le prenom \n");
        $Asurname = trim(fgets(STDIN));
        print ("saisir l'ancienneté \n");
        $Aseniority = trim(fgets(STDIN));
    $this -> lesInscrits[] = new Participant( $Aname , $Asurname , $Aseniority );
    print ("voulez vous continuez ? (oui/non) \n");
    $rep = trim(fgets(STDIN));
    }
    while(strtolower($rep)== "oui");
}

public function addSessions(){
    do{
        print ("saisir les attributs de votre Session \n");
        print ("saisir le numéro de session \n");
        $numeroSession = trim(fgets(STDIN));
        print ("saisir le nbre de place max \n");
        $nbreMax = trim(fgets(STDIN));
        print ("saisir la date de debut de la Session \n");
        $laDateDebut = trim(fgets(STDIN));
        $this -> mesSessions[] = new Session( $numeroSession , $nbreMax , $laDateDebut );
        print ("voulez vous continuez ? (oui/non) \n");
        $rep = trim(fgets(STDIN));
        }
        while(strtolower($rep)== "oui");
}

public function remplirChoixMultiple(array $tabSession) {
    do {
        // affichage liste participants à la formation 
        print "Liste des participants inscrits : \n";
        foreach ($this->lesInscrits as $index => $participant) {
            echo ($index + 1) . ". " . $participant->get_Name() . " " . $participant->get_Surname() . " " . $participant->get_Seniority() ."\n";
        }

        // affichage liste sessions de la formation 
        print"\n Liste des sessions de la formation : \n" ;
        foreach($this -> mesSessions as $index => $session ){
            echo ($index + 1) . ". " . $session->getNumero() . " " . $session->getnbMax() . " " . $session->getDateDebut() ."\n";
        }

        print "`\n veuillez saisir le numero de la session a ajouter dans les choix de l'inscrit (par preference ) \n";
        $k=trim(fgets(STDIN));

        print "veuillez saisir le numero du candidat dont vous voulez modifier les choix \n";
        $j=trim(fgets(STDIN));
        
        // comparaison du numero saisie avec les numéro des sessions du tableau mesSessions
        for($i=0 ; $i < count($tabSession)-1 ; $i++){
            if ($k == $tabSession[$i] -> getNumero()){
    
        // Ajout de la session au tableau lesChoix
        $this-> lesInscrits[$j-1]-> remplirChoix($tabSession [$i]);
                }
            }
        echo "Voulez-vous ajouter une autre session ? (oui/non) : ";
        $rep = trim(fgets(STDIN));
        } 
    while (strtolower($rep) === "oui");
}
    
public function AffecteParticipants(){
    
    // ETAPE 1 : On trie les inscrits par ancienneté
    for($i=0 ; $i<count($this -> lesInscrits)-1; $i++){
        for($j=0 ; $j<count($this -> lesInscrits)-1-$i; $j++){
            if ( $this -> lesInscrits[$j] -> get_Seniority() < $this -> lesInscrits[$j+1] -> get_Seniority()){
                $temp = $this -> lesInscrits[$j];
                $this -> lesInscrits[$j] = $this -> lesInscrits[$j+1];
                $this -> lesInscrits[$j + 1] = $temp;
            }
        }
    }
    //ETAPE 2 : On parcourt la Liste des Inscrits 1 par 1
    for($i=0; $i<count($this-> lesInscrits) ; $i++){
        // on verifie que l'inscrit a bien des choix de session enregistré
        if (count($this->lesInscrits[$i]->get_Choix()) == 0){
            print "l'inscrit n° $i n'a pas de choix definis . \n";
        }
        else {
            // ETAPE 3 : Pour chaque inscrit avec des choix, affecter une session selon ses choix, en vérifiant la disponibilité des places
            for($j=0 ; $j< count($this-> lesInscrits[$i]-> get_Choix()) ; $j++){
                    if($this -> lesInscrits[$i] -> get_ChoixSession($j) -> EstPleine() == True){
                        print"La session est pleine , passage a la prochaine session \n";
                    }
                    else{
                        $this -> lesInscrits[$i] -> get_choixSession($j)->ajouteParticipant($this -> lesInscrits[$i]);
                        print " ajout de la session avec succés ! \n";
                        break ;
                    }
            }
        }
    }
}


// public function triParticipant(){
//     for($i=0 ; $i<count($this -> lesInscrits)-1; $i++){
//         for($j=0 ; $j<count($this -> lesInscrits)-1-$i; $j++){
//         if ( $this -> lesInscrits[$j] -> get_Seniority() < $this -> lesInscrits[$j+1] -> get_Seniority()){
//             $temp = $this -> lesInscrits[$j];
//             $this -> lesInscrits[$j] = $this -> lesInscrits[$j+1];
//             $this -> lesInscrits[$j + 1] = $temp;
//             }
//         }
//     }
// }

// public function afficheInscrit(){
//     print_r($this -> lesInscrits);
// }
}

