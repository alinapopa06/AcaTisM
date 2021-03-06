<?php

class Proiecte extends Controller {
	
	function index()
	{
       
        $session=$this->loadHelper('session_helper');
        if($session->get("prof")!=NULL)
		{
            $view_proiecte = $this->loadView('proiecte_view');
            $model_proiecte = $this->loadModel('Proiecte_model');
            $cereri=$model_proiecte->getCereri();
            $view_proiecte->set('cereri',$cereri);
            $proiecte=$model_proiecte->getProjects($_SESSION['id_profesor']);
            $view_proiecte->set('proiecte',$proiecte);
            $propuneri=$model_proiecte->getPropuneri($_SESSION['id_profesor']);
            $view_proiecte->set('propuneri',$propuneri);
            $view_proiecte->render();
        }
		else
		{
			$error=$this->loadError();
			$error->accessDenied();
		}
		
	}
}
?>