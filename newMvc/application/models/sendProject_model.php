<?php

class sendProject_model extends Model {
	
	public function send($id_prof,$id_proj,$id_stud)
	{
		$id_prof = $this->escapeString($id_prof);
		$id_proj = $this->escapeString($id_proj);
		$id_stud = $this->escapeString($id_stud);
		$sql_verifi="SELECT id_student FROM cereri WHERE id_profesor=".$id_prof." and id_proiect=".$id_proj;
		$verify=$this->query($sql_verifi);
		if(isset($verify[0]['id_student']))
		{
			if($verify[0]['id_student']==$id_stud)
			{
				return 0;
			}
		}
		else {
			$sql="INSERT INTO cereri(id_student, id_profesor, id_proiect) VALUES (".$id_stud.','.$id_prof.','.$id_proj.")";
			$result= $this->execute($sql);
			return $result;
		}
		
	}
	public function propunere($id_prof,$id_stud,$descriere,$nume_proiect,$tip_proiect)
	{
		$id_prof = $this->escapeString($id_prof);
		$id_stud = $this->escapeString($id_stud);
		$descriere= $this->escapeString($descriere);
		$nume_proiect=$this->escapeString($nume_proiect);
		$tip_proiect=$this->escapeString($tip_proiect);
		$sql="INSERT INTO `propuneri`( `id_profesor`, `nume_proiect`, `descriere`, `id_student`,`tip_proiect`) VALUES (".$id_prof.',"'.$nume_proiect.'","'.$descriere.'",'.$_SESSION['id_student'].",'".$tip_proiect."')";
		$res=$this->execute($sql);
	}
	public function verify($id)
	{
		$id=$this->escapeString($id);
		$sql="SELECT id_proiect from studenti where id_student='$id'";
		$res=$this->query($sql);
		if($res[0][0]==NULL) 
		{
			return true;
		}
		return false;
	}
}

?>
