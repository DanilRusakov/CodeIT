<?php

class Controller_login extends Controller
{
	function __construct()
	{
		$this->model = new Model_Login();
		$this->view = new View();
	}
	function action_index()
	{	
		if(isset($_POST['password']) && isset($_POST['login'])){
			$data = $this->model->authentication($_POST);
			setcookie("username", $data['name'], time()+3600);
			header('Location: /');
		}
		$this->view->generate('login_view.php', 'template_view.php');
	}
}