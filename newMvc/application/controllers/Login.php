
<?php
include APP_DIR.'helpers/session_helper.php';
include APP_DIR.'models/Login_model.php';
class Login extends Controller {
	
	function index()
	{
		$model=new Login_model();
		$template = $this->loadView('login_view');
		$template->render();
	}

}

?>
