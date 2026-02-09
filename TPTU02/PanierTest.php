<?php
require './vendor/autoload.php';
require 'Panier.php';
require 'Produit.php';
class PanierTest extends PHPUnit\Framework\TestCase
{
    private $panier; //objet Panier du test

    public function setUp():void
    {
        $this->panier=new Panier('monPanier');
        $this->panier->ajouterProduit(new Produit('bic','bic bleu',1),5);
        $this->panier->ajouterProduit(new Produit('rame80g','rame 500feuilles 80grammes',5),1);
    }

    public function testAjouterProduit()
    {
        $this->assertArrayHasKey('bic', $this->panier->getLesProduits());
        $this->assertArrayHasKey('rame80g', $this->panier->getLesProduits());
    }

    public function testTotalSansPromotion()
    {
        $this->assertEquals(10, $this->panier->totalSansPromotion());
    }

    public function testPromotion()
    {
        $this->assertEquals(1, $this->panier->promotion());
    }

    public function testTotalAvecPromotion()
    {
        $this->assertEquals(9, $this->panier->totalAvecPromotion());
    }
    
}
