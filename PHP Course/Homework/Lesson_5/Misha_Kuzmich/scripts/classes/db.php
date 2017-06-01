<?php
class db{
	public static $pdo;
	public function newDB($dbname){
		try{
			self::$pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
			self::$pdo->query("use $dbname");
		}catch(Exception $e){
			response::error("Ошибка. Не удалось создать базу данных. <b>" . $e->getmessage() . '</b>');
		}
	}
	public function newTable(){
		try{
			self::$pdo->query(
				"CREATE TABLE users (
				id int(4) NOT NULL auto_increment,
				firstname varchar(20) NOT NULL default '',
				secondname varchar(20) NOT NULL default '',
				email varchar(50) NOT NULL default '',
				ticket varchar(10) NOT NULL default '',
				regdate timestamp NOT NULL default CURRENT_TIMESTAMP,
				PRIMARY KEY (id)
				)"
				);
		}catch(Exception $e){
			response::error("Ошибка. Не удалось создать таблицу. <b>" . $e->getmessage() . '</b>');
		}
	}

	public static function checkEmail($email){
		self::$pdo->query("use k_users");
		$query = "SELECT * FROM users WHERE email= '" . $email . "'";
		$rows = self::$pdo->query($query)->rowCount();
		if($rows == 0){
			return 1;
		}else{
			return 0;
		}
	}

	public function insertNew($user)
	{
		$result = self::$pdo->exec("INSERT INTO users (firstname, secondname, email, ticket) VALUES ('$user->firstname', '$user->secondname', '$user->email', '$user->ticket')" );
		if($result == 1){
			response::$msg = "Регистрация успешна!";
			response::$status = "ok";
			response::send();
		}
		response::error("Ошибка регистрации. Попробуйте позже.");
		
	}

	public function __construct($host,$user,$pass){
		try{
			$dsn = "mysql:host=$host;charset=utf8";
			self::$pdo = new PDO($dsn, $user, $pass);
		}catch(Exception $e){
			response::error("Ошибка соединения с базой. <b>" . $e->getmessage() . '</b>');
		}
	}
}