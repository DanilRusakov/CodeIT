<?php
class Controller_logout extends Controller
{
	function action_index()
	{	
		unset($_COOKIE["username"]);
		// header('Location: /');
		$this->view->generate('main_view.php', 'template_view.php');
	}
}