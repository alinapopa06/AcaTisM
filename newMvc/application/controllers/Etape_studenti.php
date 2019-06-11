<?php

class Etape_studenti extends Controller {
	
	function index()
	{
		$help=$this->loadHelper('session_helper');
		if($help->get("id_studenst")!=NULL)
		{
			$template = $this->loadView('etape_stud_view');
			$template->render();
			$help->destroy();
		}
		else
		{
			$this->redirect("login");
		}
	}
}
?>
