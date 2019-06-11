<?php

class addProject_model extends Model {
	
	public function insert($id_prof,$nume_proiect,$descriere,$mini,$tip_proiect)
	{
		$id_prof = $this->escapeString($id_prof);
		$nume_proiect = $this->escapeString($nume_proiect);
        $tip_proiect = $this->escapeString($tip_proiect);
        $descriere = $this->escapeString($descriere);
        $mini=$this->escapeString($mini);
		$sql="INSERT INTO `proiecte`(`id_profesor`, `nume_proiect`, `descriere`,`mini_descriere`, `tip_proiect`) VALUES(".$id_prof.",'".$nume_proiect."','".$descriere."','".$mini."','".$tip_proiect."')";
        $result= $this->execute($sql);
		return $result;
		echo $result;
	}

}

?>
