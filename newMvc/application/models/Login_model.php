<?php

class Login_model extends Model {

	public $username;
	public $password;

	public function verificare()
	{
     $username=$this->username;
		 $password=$this->password;
		 $username=$this->escapeString($username);
		 $password=$this->escapeString($password);
		 $sql="Select * from utilizatori where nume_utilizator='$username'";
		 $user=$this->query($sql);
		if( !empty($user))
		{
			if(password_verify($_POST['password'],$user[0]['parola']))
			{
				return $user[0];
			}
			else 
			{
				return -1;
			}
		}
		else 
		{
			 return -2;
		}


	}
}


?>
