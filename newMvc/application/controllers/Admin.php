<?php

class Admin extends Controller {
	
	function index()
	{
        $view = $this->loadView('admin_view');
        $admin_model=$this->loadModel('admin_model');
        $help=$this->loadHelper('session_helper');
        
        if(isset($_POST['SignUpStud']))
        {
            if($_POST['password']==$_POST['verifypass'])
            {
                $admin_model->insertStud($_POST['username'],$_POST['password'],3,$_POST['Nume'],$_POST['Prenume'],$_POST['email'],$_POST['an'],$_POST['grupa'],$_POST['tip'],$_POST['git_repos'],$_POST['git_username']);
                $this->redirect('admin');
            }
            else
            {
                echo "<script>alert('parola nu coincide')</script>";
                $view->set('post',$_POST);
            }
        }
        if(isset($_POST['SignUpProf']))
        {
            if($_POST['password']==$_POST['verifypass'])
            {
                $admin_model->insertProf($_POST['username'],$_POST['password'],2,$_POST['Nume'],$_POST['Prenume'],$_POST['email']);
                $this->redirect('admin');
            }
            else
            {
                echo "<script>alert('parola nu coincide')</script>";
                $view->set('post',$_POST);
            }
        }
        $view->render();
	}
}

?>
