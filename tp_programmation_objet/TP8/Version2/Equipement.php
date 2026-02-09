<?php

class Equipement
{
    private string $idEquip;
    private string $libEquip;

    public function __construct(string $unId, string $unLib)
    {
        $this->idEquip = $unId;
        $this->libEquip = $unLib;
    }

    public function versChaine():string
    {
        return "Libelle : $this->libEquip";
    }
}