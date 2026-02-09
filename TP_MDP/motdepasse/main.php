<?php
require 'utilisateur.php';

$unUtilisateur=new Utilisateur(1,'toni','1234','Toni','Rannef');
//le mot de passe (mdp) actuel est 1234
var_dump($unUtilisateur->getIdentite());//Toni Rannef
var_dump($unUtilisateur->getMotDePasse());//1234
//$unUtilisateur->ajouterMotDePasse($unUtilisateur->getMotDePasse());
$unUtilisateur->renouvelerMDP('1234');//on change le mdp actuel pour 5678
var_dump($unUtilisateur->getMotDePasse());//5678
var_dump($unUtilisateur->getLesMotsDePasse());
?>