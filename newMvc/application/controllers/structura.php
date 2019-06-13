<?php

class structura extends Controller {
	
	function index()
	{
		$help=$this->loadHelper('session_helper');
		if($help->get("id_profesor")!=NULL)
		{
			$template = $this->loadView('structurasemetruprof_view');
			$template->render();
		}
		else
		{
			$this->redirect("login");
		}
	}
}
?>