<?php

class Model_Login extends Model
{
	public function connect_db(){
			$user = 'root';
			$pass = '';
			return new PDO('mysql:host=localhost;dbname=test_codeit', $user, $pass);
	}
	
	public function authentication($data){
			$dbh = $this->connect_db();
			$pass = md5($data['password']);
		   if ($dbh) {
				foreach ($dbh->query('SELECT email, login, name, pass, country_id, birthday  FROM users WHERE email=\''.$data['login'].'\' or login=\''.$data['login'].'\' ') as $row)
				{
					//$data = $row;
				}
				if($row){
					if($pass == $row['pass'])
						return $row;
				}
			}
		
	}
	
}