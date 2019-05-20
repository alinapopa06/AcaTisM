<?php

class Etape_start extends Controller {
	
	function index()
	{
		$template = $this->loadView('etape_stud_view');
		$template->render();
	}
}

?>
