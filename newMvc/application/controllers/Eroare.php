<?php

class Eroare extends Controller {
	
	function index()
	{
		$this->error404();
	}
	
	function error404()
	{
		echo '<h1>404 Error</h1>';
		echo '<p>Looks like this page doesn\'t exist</p>';
	}
	function accessDenied()
	{
		echo '<h1>Access Denied</h1>';
		echo '<p>Looks like you do not have access to this page.</p>';
	}
}

?>
