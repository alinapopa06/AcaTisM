
<?php
include APP_DIR.'helpers/session_helper.php';
class Login extends Controller {
	
	function index()
	{
		$model=$this->loadModel('Login_model');
		$template = $this->loadView('login_view');
		$template->render();
	}

}

?>
