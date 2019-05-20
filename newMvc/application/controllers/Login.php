
<?php
include APP_DIR.'helpers/session_helper.php';
include APP_DIR.'models/Login_model.php';
class Login extends Controller {
	
	function index()
	{
		$model=new Login_model();
		$rez=$model->getSomething(1);
		$template = $this->loadView('login_view');
		$template->render();
		$sesiune=new Session_helper();
	}
	function newMethod()
	{
		$template=$this->loadView('newView');
		$template->set("nume","Popa");
		$template->set("prenume","ALina");
		$template->render();
	}
}

?>
