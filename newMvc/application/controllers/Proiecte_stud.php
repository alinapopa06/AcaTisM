<?php

class Proiecte_stud extends Controller {
	
	function index()
	{
		$template = $this->loadView('proiecte_stud_view');
		$template->render();
	}
}

?>
