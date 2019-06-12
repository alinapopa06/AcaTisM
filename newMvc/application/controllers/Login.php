
<?php

//nclude APP_DIR.'helpers/session_helper.php';

class Login extends Controller {

	public function index(){
            
			$template = $this->loadView('login_view');
			$session=$this->loadHelper('session_helper');

           // print_r($_SESSION);
		   $template->render();			

	}
}
?>


