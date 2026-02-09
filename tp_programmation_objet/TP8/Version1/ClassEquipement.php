<?php

class Equipement{
    private string $idEquip;
    private string $libEquip;
    public function __construct(string $unId,string $unLibelle){
        $this->idEquip = $unId;
        $this->libEquip = $unLibelle;
    }

    public function getLibEquip(){
        return $this->libEquip;
    }

    public function ToString(){
        print("           - ".$this->getLibEquip()."\n \n");
    }
}