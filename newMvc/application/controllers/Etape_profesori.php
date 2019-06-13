<?php

class Etape_profesori extends Controller {
	
	function index()
	{
		$help=$this->loadHelper('session_helper');
		if($help->get("id_profesor")!=NULL)
		{
			$etape_view = $this->loadView('etape_prof_view');
			$etape_model=$this->loadModel('etape_model');
			$git=$etape_model->getInfo($id_student);
			if(isset($git[0]['git_username']) && isset($git[0]['git_repos']))
			$commit=$etape_model->getCommits($git[0]['git_username'],$git[0]['git_repos']);
			$etape_view->set('commit',$commit);
			$etape_view->render();
		}
		else
		{
			$this->redirect("login");
		}
	}
	function student($id_student)
	{
		$help=$this->loadHelper('session_helper');
		if($help->get("id_profesor")!=NULL)
		{
			$etape_view = $this->loadView('etape_prof_view');
			$etape_model=$this->loadModel('etape_model');
			$git=$etape_model->getInfo($id_student);
			if(!empty($git))
			{
				$commit=$etape_model->getCommits($git[0]['git_username'],$git[0]['git_repos']);
				$etape_view->set('commit',$commit);
			}
			$etape_view->render();
		}
		else
		{
			$this->redirect("login");
		}
	}

}
?>
