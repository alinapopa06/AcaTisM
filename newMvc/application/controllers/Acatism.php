<?php

class Acatism extends Controller {
	
	function index()
	{
		$template = $this->loadView('acatism_view');
		$template->render();
	}
}

?>
