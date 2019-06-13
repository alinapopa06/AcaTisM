<?php

class structura_stud extends Controller {
	
	function index()
	{
		$help=$this->loadHelper('session_helper');
		if($help->get("id_student")!=NULL)
		{
			$template = $this->loadView('structura_stud_view');
			$template->render();
		}
		else
		{
			$this->redirect("login");
		}
	}
}
?>