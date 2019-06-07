<?php

class Session_helper {

	function set($key, $val)
	{
		$_SESSION["$key"] = $val;
	}
	
	function get($key)
	{
		if(isset($_SESSION["$key"]))
		return $_SESSION["$key"];
		else return null;
	}
	
	function destroy()
	{
		session_destroy();
	}

}

?>