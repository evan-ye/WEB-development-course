<?php
class user {
	public $firstname;
	public $secondname;
	public $email;
	public $ticket;
	public $valid = false;
	public function info()
	{
		foreach($this as $key => $value) {
			print "$value<br>";
		}
	}

	public function validateFields(){
		global $db;
		if(preg_match('/^[а-яА-ЯЇїЄєЁёa-zA-Z\s\.]{1,}$/u', $this->firstname) === 0){
			response::$msg = "Не верно введено имя.";
			response::send();
		}
		if(preg_match('/^[а-яА-ЯЇїЄєЁёa-zA-Z\s\.]{1,}$/u', $this->secondname) === 0){
			response::$status = "fail";
			response::$msg = "Не верно введена фамилия.";
			response::send();
		}
		if(preg_match('/^([a-zA-Z0-9_-]+\.)*[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\.[a-zA-Z]{2,6}$/', $this->email) === 0){
			response::$status = "fail";
			response::$msg = "Не верно указан email адрес.";
			response::send();
		}

		if($db->checkEmail($this->email) == 0){
			response::$status = "fail";
			response::$msg = "Такой адрес уже есть в базе.";
			response::send();
		}
		if(!$this->ticket){
			response::$status = "fail";
			response::$msg = "Не указан тип билета.";
			response::send();
		}
		$this->valid = true;
	}

	public function __construct($firstname,$secondname,$email,$ticket){
		$this->firstname = $firstname;
		$this->secondname = $secondname;
		$this->email = $email;
		$this->ticket = $ticket;
	}
}