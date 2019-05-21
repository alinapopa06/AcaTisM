<?php

class Proiecte_studenti extends Controller {
	
	function index()
	{
		$template = $this->loadView('proiecte_stud_view');
		$template->render();
	}
}

?>
