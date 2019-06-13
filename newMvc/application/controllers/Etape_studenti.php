<?php

class Etape_studenti extends Controller {
	
	function index()
	{
		$help=$this->loadHelper('session_helper');
		if($help->get("id_student")!=NULL)
		if($help->get("stud")!=NULL)
		{
			$model = $this->loadModel('etape_studenti_model');
			$model->setStud($help->get("stud"));
			$template = $this->loadView('etape_stud_view');
			$template->set("studInfo",$model->getStudInfo());
			$template->set("studID",$model->getInfo());
			$template->set('etape',$model->getEtape());
			$template->set('proiecte',$model->getProject());
			$template->set('etape_arr',$model->getDescriereEtapa());




			$template->render();
		}
		else
		{
			$this->redirect("login");
		}
	}
}
?>
