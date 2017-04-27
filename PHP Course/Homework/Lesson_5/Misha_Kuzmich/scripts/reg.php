<?php
require 'connect.php';
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$email = $_POST['email'];
$ticket = $_POST['type'];

$response = ["status" => "", "msg"=>""];
function response($status='ok'){
	global $response;
	$response["status"] = $status;
	die(json_encode($response));
}
if(!preg_match('/^[а-яА-ЯЇїЄєЁёa-zA-Z\s\.]{1,}$/u', $firstname)){
	$response["msg"] = "Не верно введено имя";
	response("fail");
}
if(!preg_match('/^[а-яА-ЯЇїЄєЁёa-zA-Z\s\.]{1,}$/u', $secondname)){
	$response["msg"] = "Не верно введена фамилия";
	response("fail");
}
if(!preg_match('/^([a-zA-Z0-9_-]+\.)*[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)*\.[a-zA-Z]{2,6}$/', $email)){
	$response["msg"] = "Не верно введен email адресс";
	response("fail");
}

$query = "SELECT * FROM users WHERE email = '".$email."'"; 
$result = $db->query($query);
if($result->num_rows != 0){
	$response["msg"] = "Пользоветель с таким email уже зарегестрирован";
	response("fail");
}


$db->query(
	"INSERT INTO users (firstname, secondname, email, ticket)
	VALUES ('$firstname', '$secondname', '$email', '$ticket')"
	);
$response["msg"] = "Регистрация успешна";
response();