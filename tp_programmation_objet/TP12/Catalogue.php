<?php
class catalogue {
    private string $annee ;
    private array $lesJouets ;

    public function __construct($annee){
        $this-> annee = $annee ;
        $this-> lesJouets = [];
    }

    public function getAnnee(){
        return $this-> annee ;
    }

    public function ajouterLesJouets(Jouet $unJouet , int $Qte){

        $this -> lesJouets[] = [
            $unJouet => $Qte ;
        ]
    }

    public function QteDistribue(){
        $compteur = 0 ;
        foreach ($this -> lesJouets as $unJouet){
            foreach ( $unJouet as $uneQte => $qte){
            $compteur += $qte;
        }
    }
        return $compteur ;
    }

    public function StatCateg(): array {
        $LesCategories = [];
        foreach ($this->lesJouets as $unJouet) {
            foreach ($unJouet as $uneQte => $qte) {
                $categorie = $jouet->getCat();

                if (!isset($LesCategories[$categorie])) {
                    $LesCategories[$categorie] = 0;
                }

                $LesCategories[$categorie] += $qte;
            }
        }
        return $LesCategories; 
    }
}