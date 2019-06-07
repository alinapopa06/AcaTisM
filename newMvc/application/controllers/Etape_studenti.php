<?php

class Etape_studenti extends Controller {
	
	function index()
	{
		$help=$this->loadHelper('session_helper');
		if($help->get("username")!=NULL)
		{
			$template = $this->loadView('etape_stud_view');
			$template->render();
		}
		else
		{
			$error=$this->loadError();
			$error->accessDenied();
		}
	}
}
?>
