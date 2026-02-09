<?php

#Exercice 2 : 

Class Produit{
    private string $libelle;
    private string $code_tva;
    private float $prix_achat;
    private int $stock;

    private static $nb_instance=0;

    public function __construct(string $libelle, string $code_tva, float $prix_achat, int $stock){
        $this->libelle=$libelle;
        $this->code_tva=$code_tva;
        $this->prix_achat=$prix_achat;
        $this->stock=$stock;
        self::$nb_instance+=1;
        
    }

    public function prix_ttc($taxe){
        return $this->prix_achat*$taxe;
    }

    public static function get_nb_instance(){
        return self::$nb_instance;
    }
}
$produit=new Produit("PS3",'h',30,4);
$produit2=new Produit("PS4",'h',30,4);
$produit3=new Produit("PS5",'h',30,4);
echo $produit3->get_nb_instance()."\n";