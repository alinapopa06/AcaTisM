<?php

class Commit {
    public $autor;
    public $data;
    public $mesaj;
    public $link;
    public $status;
    public $files;
    function set($autor,$data,$mesaj,$link)
    {
        $this->autor=$autor;
        $this->data=$data;
        $this->mesaj=$mesaj;
        $this->link=$link;
    }

}

?>