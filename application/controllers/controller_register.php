<?php

class Controller_register extends Controller
{
	function __construct()
	{
		$this->model = new Model_Register();
		$this->view = new View();
	}
	function action_index()
	{	
		if($_POST['password']){
			$data['error'] = $this->model->check_user_on_exist($_POST);
			if($data['error']){
				$data['error'] = "This ".$data['error']." already register";
			}
			else{
				$data = $this->model->registration($_POST);
				$data['registered'] = "<a href='/login'>go to the login page</a>";
			}
			
		}

		$data['form'] = $this->model->get_countries();		
		$this->view->generate('register_view.php', 'template_view.php', $data);
	}
}