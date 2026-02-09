<?php

class Latte extends Cafe {
    private $lait = 10; //quantite de sucre

    public function __construct() {
        parent::__construct(20);//quantite de cafe
    }

    public function getLait() {
        return $this -> lait;
    }
}
?>