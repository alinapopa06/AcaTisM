<?php

class AdaugaProiect extends Controller {
	
	function index()
	{
         $add_proiect = $this->loadView('adaugaProiect_view');
        $add_proiect->render();
	}
}
?>