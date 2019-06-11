
<?php
class Login extends Controller {
	
	function index()
	{
		$model=$this->loadModel('Login_model');
		$template = $this->loadView('login_view');
		$session=$this->loadHelper('session_helper');
		$session->set('id_student','11');
		$session->set('id_profesor','2');
		$template->render();
	}

}

?>
