<?php

class Cerere {
    public $nume;
    public $prenume;
    public $id;
    public $proiect;
    function setNume($nume, $prenume,$id)
    {
        $this->nume=$nume;
        $this->prenume=$prenume;
        $this->id=$id;
    }
    function setProject($proiect)
    {
        $this->proiect=$proiect;
    }
}

?>