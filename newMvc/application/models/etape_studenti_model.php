<?php

class etape_studenti_model extends Model {

    private $studID;
    private $projectID;

    public function setStud($studID){
        $this->studID = $studID;
    }

 

    public function getEtape(){
		$id=$this->escapeString($this->projectID);
		$sql="Select * from etape where id_proiect='".$id."'";
        $etape=$this->query($sql);
        return $etape;
    }

    public function getInfo(){
        return $this->studID;
    }

    public function getProject(){
        $id=$this->escapeString($this->projectID);
        $sql="Select * from proiecte where id_proiect='".$id."'";
        $proiecte=$this->query($sql);
        return $proiecte;

    }

   public function getDescriereEtapa(){
    $id=$this->escapeString($this->projectID);
    $sql="Select * from etape where id_proiect='".$id."'";
    $etape_arr=$this->query($sql);
    //$etape_arr=explode(".",$etape['descriere']);
    //return $etape_arr;
    return $etape_arr;





   }
}
