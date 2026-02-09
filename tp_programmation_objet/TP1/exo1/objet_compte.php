<?php

// include "classe_objet_compte.php";
class Compte {
    private $numC;
    private $nomC;
    private $solde;


function __construct($numCompte,$nomCompte,$solde){
    $this-> numC = $numCompte ;
    $this-> nomC = $nomCompte ;
    $this-> solde = $solde ;
}

public function crediter($credit){
    $this-> solde += $credit;
}

public function debiter($debit){
    $this-> solde -= $debit;
}

public function _getsolde(){
    return $this -> solde ;
}

public function _getnumC(){
    return $this -> numC ;
}

public function _getnomC(){
    return $this -> nomC ;
}

public function affiche(){
    print_r($this);
}
}

do{
    print("saisir le numéro de compte :\n");
    $numero=trim(fgets(STDIN));

    print("saisir le nom du propriétaire du compte:\n");
    $nom=trim(fgets(STDIN));

    print("saisir le solde du compte :\n");
    $solde=trim(fgets(STDIN));

    $compte[]=new compte ($numero,$nom,$solde);

    print("voulez vous continuez (oui/non) ?\n");
    $res=trim(fgets(STDIN));
}
while($res=="oui");

$i=0;

foreach($compte as $ligne){
    do {
    print("voulez vous saisir un crédit pour ce compte n° $i:");
    $rep=trim(fgets(STDIN));
    if ($rep=="non"){
        print("passage au prochain compte");
        break;
    }

    // print("saisir la somme :\n");
    // $somme=trim(fgets(STDIN));
    // $compte[$i] -> crediter($somme);   version pour la saisie

    $compte[$i] -> crediter($compte[$i] -> _getsolde()*0.1);  // version pour augmenter chaque compte de 10%
    $i++;
    print("continuer pour ce compte ?");
    $reponse=trim(fgets(STDIN));
    }
    while($reponse=="oui");
}

$i=0;

foreach($compte as $ligne){
    do {
    print("voulez vous saisir un débit pour le compte n° $i :");
    $rep=trim(fgets(STDIN));
    if ($rep=="non"){
        print("passage au prochain compte");
        break;
    }
    print("saisir la somme :\n");
    $somme=trim(fgets(STDIN));
    $compte[$i] -> debiter($somme);
    $i++;
    print("continuer pour ce compte ?");
    $reponse=trim(fgets(STDIN));
    }
    while($reponse=="oui");
}

foreach($compte as $ligne ) {
        $ligne->affiche();
    }


    // function rechercher($compte,$numC) {
        
    //     for($i=0; $i<count($compte);$i++){
    //         $i=-1;
    //         do {
    //             $i++;
    //         } 
    //         while($compte[$i] -> _getnumC() != $numC);
    //     }

    //     return ;
    // }

?>

