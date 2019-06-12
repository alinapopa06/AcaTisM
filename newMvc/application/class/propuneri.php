<?php

class Propuneri {
    public $titlu_proiect;
    public $nume_student;
    public $mini_descriere;
    public $id_propunere;
    function setPropunere($titlu_proiect, $nume_student,$mini_descriere,$id_propunere)
    {
        $this->titlu_proiect=$titlu_proiect;
        $this->nume_student=$nume_student;
        $this->mini_descriere=$mini_descriere;
        $this->id_propunere=$id_propunere;
    }
}

?>