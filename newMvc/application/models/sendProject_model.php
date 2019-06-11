<?php

class sendProject_model extends Model {
	
	public function send($id_prof,$id_proj,$id_stud)
	{
		$id_prof = $this->escapeString($id_prof);
		$id_proj = $this->escapeString($id_proj);
		$id_stud = $this->escapeString($id_stud);
		$sql_verifi="SELECT id_student, id_proiect FROM cereri WHERE id_student=".$id_stud;
		$verify=$this->query($sql_verifi);
		if(isset($verify[0]['id_student']))
		{
			return 0;
		}
		$sql="INSERT INTO cereri(id_student, id_profesor, id_proiect) VALUES (".$id_stud.','.$id_prof.','.$id_proj.")";
		$result= $this->execute($sql);
		return $result;
		echo $result;
	}

}

?>
