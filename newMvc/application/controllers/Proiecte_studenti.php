<?php

class Proiecte_studenti extends Controller {
	
	function index()
	{	
		$help=$this->loadHelper('session_helper');
		if( $help->get("id_student")!=NULL ) 
		{
			$view_proiecte = $this->loadView('proiecte_stud_view');
			$model_proiecte= $this->loadModel('Proiecte_stud');
			$profesori=$model_proiecte->getAllProfesor();
			$view_proiecte->set('profesori',$profesori);
			$view_proiecte->render();
		}
		else
		{
			$this->redirect("login");
		}
	}
	function profesor()
	{
		$nume_profesor = func_get_args();
		if(count($nume_profesor)!=0)
		{	
			$view_prof = $this->loadView('proiecte_stud_view');
			$model_prof= $this->loadModel('Proiecte_stud');
			$nume_profesor=implode(" ",$nume_profesor);
			$profesor=$model_prof->getProf($nume_profesor);
			if($profesor==null)
			{
				$view_prof->set('eroare',"Nu exista acest profesor");
			}
			else
			{
				$view_prof->set('nr_prof',1);
				$view_prof->set('profesori',$profesor);
			}
			$view_prof->render();
		}
		else 
		{
			$error=$this->loadError();
			$error->error404();
		}
		

	}
	

}

?>
