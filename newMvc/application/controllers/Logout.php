<?php

class Logout extends Controller
{
    function index(){
    $help=$this->loadHelper('session_helper');
    $help->destroy();
    $this->redirect("Login");

    }

}


?>