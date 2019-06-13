<?php

class Acatism extends Controller {
	
	function index()
	{
		$template = $this->loadView('acatism_view');
		$help=$this->loadHelper('session_helper');
		 if( $help->get("id_student")!=NULL ) 
		{
			
			$template->render();
		}
		else{
			$this->redirect("Login");
		}
		
	}
}

?>
