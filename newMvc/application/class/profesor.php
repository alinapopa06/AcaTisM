<?php

class Profesor implements Countable  {
    public $nume;
    public $prenume;
    public $id;
    public $proiecte;
    function setNume($nume, $prenume)
    {
        $this->nume=$nume;
        $this->prenume=$prenume;
    }
    function setId($id)
    {
        $this->id=$id;
    }
    function setProjects($proiecte)
    {
        $this->proiecte=$proiecte;
    }
    function count()
    {
        return count($this->proiecte);
    }
}

?>