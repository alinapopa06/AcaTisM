<?php

class Acatism extends Controller {
	
	function index()
	{
		$template = $this->loadView('acatism_view');
		$help=$this->loadHelper('session_helper');
		//echo $help->get("stud");
		 if( $help->get("stud")!=NULL ) 
		{
			
			$template->render();
		}
		else{
			$this->redirect("Login");
		}
		
	}
}

?>
