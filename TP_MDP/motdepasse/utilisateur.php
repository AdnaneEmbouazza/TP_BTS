<?php

class Utilisateur
{
    private $id;
    private $login;
    private $motDePasse;
    private $nom;
    private $prenom;
    private $lesMotsDePasse; //array historique des derniers mdp

    public function __construct($id, $login, $motDePasse, $nom, $prenom)
    {
        $this->id = $id;
        $this->login = $login;
        $this->motDePasse = $motDePasse;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->lesMotsDePasse[]= $motDePasse;
    }

    public function getIdentite()
    {
        return $this->nom . ' ' . $this->prenom;
    }
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }
    public function getLesMotsDePasse()
    {
        return $this->lesMotsDePasse;
    }

    //ajoute un mdp a l'historique des mots de passe
    public function ajouterMotDePasse($unMotDePasse)
    {
        $this->lesMotsDePasse[] = $unMotDePasse;
    }

    public function renouvelerMDP($nouveauMotDePasse)
    { //similaire au setter 

        if (preg_match("/[a-z]/" , $nouveauMotDePasse)) {
        }
        for ($i = count($this->getLesMotsDePasse()) ; $i >= count($this->getLesMotsDePasse())-3 ; $i--){
            if ($nouveauMotDePasse == $this->getLesMotsDePasse()[$i]){
                print "mot de passe déjà utilisé !\n";
                return ;
            }
        }
        $this -> ajouterMotDePasse($this->getMotDePasse());
        $this->motDePasse = $nouveauMotDePasse;
    }
}
