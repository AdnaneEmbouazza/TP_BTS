<?php
class MachineACafe {
    private $cafe = 1000;
    private $lait = 500;
    private $sucre = 200;

    public function prepare($cafe) {
        if ($this->encoreDuCafe()) {
            $this->cafe = $this->cafe -$cafe->getCafe();
            
            if (get_class($cafe)=='Macchiato') {
                $this->verserSucre($cafe);//verser le sucre dans le machiato
            }
            if (get_class($cafe)=='Latte') {
                $this->verserLait($cafe); //verser le lait dans le latte
            }

        }
    }

    public function verserSucre($cafe) {
        $this->sucre = $this->sucre - $cafe->getSucre();
    }

    public function encoreDuCafe() {
        //y a t il encore du café dans la machine?
        //booleen TRUE/FALSE
        return $this->cafe > 0;
    }

    public function getCafe() {
        return $this->cafe;
    }

    public function getSucre() {
        return $this->sucre;
    }

    public function getLait() {
        return $this->lait ;
    }

    public function __toString()
    {
        return "cafe: ".$this->cafe." lait: ".$this->lait." sucre: ".$this->sucre;
    }

    public function verserLait($cafe) {
        $this->lait = $this->lait - $cafe->getLait();
    }
}
?>