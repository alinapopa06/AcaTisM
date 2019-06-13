<?php

class Acatismprof extends Controller {
	
	function index()
	{
		$template = $this->loadView('acatismprof_view');
		$help=$this->loadHelper('session_helper');
		//print_r($_SESSION['prof']);
		 if( $help->get("id_profesor")!=NULL ) 
		{
			
			$template->render();
		}
		
		else
		{
		    $this->redirect("Login");
		}
		
	}
}

?>
