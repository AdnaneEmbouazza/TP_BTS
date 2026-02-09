<?php
class Produit {
    private $ref;
    private $nom;
    private $prix;

    function __construct($ref, $nom, $prix) {
        $this->ref = $ref;
        $this->nom = $nom;
        $this->prix = $prix;
    }
    

    public function getRef()
    {
        return $this->ref;
    }

    public function getPrix()
    {
        return $this->prix;
    }
}
?>
