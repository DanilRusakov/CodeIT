<?php

class Model_Register extends Model
{
	public function connect_db(){
			$user = 'root';
			$pass = '';
			return new PDO('mysql:host=localhost;dbname=test_codeit', $user, $pass);
	}
	public function get_countries()
	{	
		$data['countries'] = array();
			try {
				$dbh = $this->connect_db();
			    foreach($dbh->query('SELECT country_id, title_en from _countries ') as $row) {
			    	$data['countries'][]=array(
			    		'country_id' => $row['country_id'],
			    		'name' => $row['title_en'],
			    		);
			    }
			} catch (PDOException $e) {
			    print "Error!: " . $e->getMessage() . "<br/>";
			    die();
			}
		
		return $data;
	}
	public function check_user_on_exist($data){
			$dbh = $this->connect_db();
		   if ($dbh) {
		   		$error = "";
			    foreach ($dbh->query('SELECT *  FROM users WHERE email=\''.$data['email'].'\' ') as $row)
				{
					
				}
				if($row){
						$error = "email";
						return $error;
					}
				foreach ($dbh->query('SELECT *  FROM users WHERE login=\''.$data['login'].'\' ') as $row)
				{
					
				}
				if($row){
						$error = "login";
				}
			}
		return $error;
	}
	public function registration($data){
		$dbh = $this->connect_db();
		$data['password'] = md5($data['password']);
		$stmt = $dbh->prepare("INSERT INTO users (name, email, login, birthday, pass, country_id ) VALUES (:name, :email, :login, :birthday, :pass, :country_id)");
								$stmt->bindParam(':name', $data['name']);
								$stmt->bindParam(':email', $data['email']);
								$stmt->bindParam(':login', $data['login']);
								$stmt->bindParam(':birthday', $data['birthday']);
								$stmt->bindParam(':pass', $data['password']);
								$stmt->bindParam(':country_id', $data['country']);
								$stmt->execute();
		return $data;
	}
}