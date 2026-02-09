<?php

class Client{
    private int $numeroClient ;
    private array $AdressesClients ;
    private string $nomClient ; 

public __construct( $numClient , $nameClient){
    $this -> numeroClient = $numClient ;
    $this -> nomClient = $nameClient ;
    $this -> $AdressesClients = [] ;
}

public function getTableAdresse(){
    return $this -> AdresselClients 
}

public function getTableAdressePrecise($index){
    return $this -> AdresseClients[$index] ;
}

public function getNumeroClient(){
    return $this -> numeroClient ;
}

public function getNbreKm(){
    return $this -> nbreKm ; 
}

public function getNomClient(){
    return $this -> nomClient ;
}

// # FONCTION QUI SERT A REMPLIR LE TABLEAU ASSOCIATIF .
// public function remplirTabAdresse( $Adresse , $ville , $CodePostal , $nbKm){
//     do{
//         print" ajouter une adresse : \n" ;
//         $AdressesClients = trim(fgets(STDIN)) ;
//         print "ajouter une ville : \n" ;
//         $ville = trim(fgets(STDIN));
//         print "ajouter un code postal : \n" ;
//         $CodePostal = trim(fgets(STDIN));
//     $this -> AdressesClients [] = ["Adresse" => $adresse, "ville"=> $ville , "CodePostal" => $CodePostal , "Km" => $nbKm]  ;
//     print "voulez vous continuez ? \n";
//     $rep= trim(fgets(STDIN)) ;
//     }
//     while(strtolower($rep)== "oui") ;
// }


}