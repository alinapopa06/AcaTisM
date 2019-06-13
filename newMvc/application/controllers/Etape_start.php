<?php

class Etape_start extends Controller {
	
	function index()
	{
		$help=$this->loadHelper('session_helper');
		if($help->get("prof")!=NULL)
		{
			$model = $this->loadModel('etape_start_model');
			$model->setProf($help->get("prof"));
			$template = $this->loadView('etape_start_view');
			$template->set("profInfo",$model->getProfInfo());
			$template->set("profProjects",$model->getProjects());
			$student=$model->getStudents();
			$project=$model->getProjectInfo($student);
			$template->set("arr",$model->getStudents());
			$template->set("projects",$project);



			//$template->set("studID",$model->getInfo());
			


			$template->render();
		}
		else
		{
			$this->redirect("login");
		}
	}
}


?>
