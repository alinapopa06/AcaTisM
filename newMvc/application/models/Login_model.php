<?php

class Login_model extends Model {
	
	public function getSomething($id)
	{
		$id = $this->escapeString($id);
		$result = $this->query('SELECT nume_utilizator,id FROM utilizatori WHERE id="'. $id .'"');
		
		return $result;
	}

}

?>
