<?php
require 'connect.php';

class response {
	public $status = 'ok';
	public $type = 'error';
	public $msg;
	public function info(){
		echo 'status : ' . $this->status . '<br>';
		echo 'type : ' . $this->type. '<br>';
		if($this->msg){
			echo 'msg : ' . $this->msg;
		}
	}
	public function send(){
		$obj = [
			"status" => $this->status,
			"type" => $this->type,
			"msg" => $this->msg,
		];
		echo json_encode($obj);
	}
}
class user {
	public $firstname;
	public $secondname;
	public $email;
	public $type;
	public $response;

	public function info(){
		echo "Firstname : $this->firstname <br>";
		echo "Secondname : $this->secondname <br>";
	}
	public function validateFields(){
		global $db;
		if(preg_match('/^[а-яА-ЯЇїЄєЁёa-zA-Z\s\.]{1,}$/u', $this->firstname) === 0){
			$this->response->status = "fail";
			$this->response->msg = "Не верно введено имя.";
		}
		if(preg_match('/^[а-яА-ЯЇїЄєЁёa-zA-Z\s\.]{1,}$/u', $this->secondname) === 0){
			$this->response->status = "fail";
			$this->response->msg = "Не верно введена фамилия.";
		}
		if(preg_match('/^([a-zA-Z0-9_-]+\.)*[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\.[a-zA-Z]{2,6}$/', $this->email) === 0){
			$this->response->status = "fail";
			$this->response->msg = "Не верно указан email-адресс.";
		}
		$query = "SELECT * FROM users WHERE email = '" .$this->email."'";
		$result = $db->query($query);
		if($result->num_rows != 0){
			$this->response->status = "fail";
			$this->response->msg = "Такой email адресс уже есть в базе";
		}
		if(!$this->ticket){
			$this->response->status = "fail";
			$this->response->msg = $this->ticket;
		}
	}
	public function insert(){
		global $db;
		$db->query("INSERT INTO users (firstname, secondname, email, ticket) VALUES ('$this->firstname', '$this->secondname', '$this->email', '$this->type')" );
		$this->response->type = "message";
		$this->response->msg = "Регистрация успешна!";
	}
	public function __construct(){
		$this->firstname = $_POST['firstname'];
		$this->secondname = $_POST['secondname'];
		$this->email = $_POST['email'];
		$this->ticket = $_POST['type'];
		$this->response = new response;
	}
}

$user = new user;

$user->validateFields();
if($user->response->status == "ok"){
	$user->insert();
}
$user->response->send();
