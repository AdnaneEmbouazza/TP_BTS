<?php
class Panier
{
    private $ref;
    private $lesProduits;

    function __construct($ref)
    {
        $this->ref = $ref;
        $this->lesProduits = array();
    }

    public function ajouterProduit($unProduit, $quantite)
    {
        $this->lesProduits[$unProduit->getRef()] = array('qte'=>$quantite, 'prix'=>$unProduit->getPrix());
    }

    public function getLesProduits()
    {
        return $this->lesProduits;
    }

    public function totalSansPromotion()
    {
        $total = 0;
        foreach ($this->lesProduits as $produit) {
            $total += $produit['qte'] * $produit['prix'];
        }
        return $total;
    }

    public function promotion()
    {
        $montantPromotion = 0;
        foreach ($this->lesProduits as $produit) {
            $nbProduitsEnPromo = intdiv($produit['qte'], 2);
            $montantPromotion += $nbProduitsEnPromo * ($produit['prix'] / 2);
        }
        return $montantPromotion;
    }

    public function totalAvecPromotion()
    {
        return $this->totalSansPromotion() - $this->promotion();
    }
}
