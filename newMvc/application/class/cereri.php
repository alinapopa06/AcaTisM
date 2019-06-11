<?php

class Cerere {
    public $nume;
    public $prenume;
    public $proiect;
    function setNume($nume, $prenume)
    {
        $this->nume=$nume;
        $this->prenume=$prenume;
    }
    function setId($id)
    {
        $this->id=$id;
    }
    function setProject($proiect)
    {
        $this->proiect=$proiect;
    }
}

?>