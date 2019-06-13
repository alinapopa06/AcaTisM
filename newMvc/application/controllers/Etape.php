<?php

class Etape extends Controller {
	
	function index()
	{
		$help=$this->loadHelper('session_helper');
		
		
			$template = $this->loadView('etape_view');
			$template->render();
		
	
	}
}
?>
