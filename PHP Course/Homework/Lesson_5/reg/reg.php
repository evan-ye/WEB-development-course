<?php
require 'functions.php';
$response = array(
	'status' => true,
	'field' => '',
	'msg' => ''
	);

if(!preg_match('/^[а-яёА-ЯЁa-zA-Z\s\-\—]{2,20}$/ui', $_POST['name']) ){
	$response['status'] = false;
	$response['field'] = 'name';
	$response['msg'] = 'Имя не должно содержать спец. символов и быть длиннее 2 символов';
	die(json_encode($response, true));
}
if(!preg_match('/^[а-яёА-ЯЁa-zA-Z\s\-\—]{2,20}$/ui', $_POST['secondname']) ){
	$response['status'] = false;
	$response['field'] = 'secondname';
	$response['msg'] = 'Укажите фамилию без спец. символов';
	die(json_encode($response, true));
}
if(!preg_match('/^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@[a-z0-9][a-z0-9\-]*[a-z0-9]\.+[a-z]{2,4}$/i', $_POST['email'])){
	$response['status'] = false;
	$response['field'] = 'email';
	$response['msg'] = 'Проверьте правильность введенного адреса';
	die(json_encode($response, true));
}
if(!checkEmail($_POST['email'])){
	$response['status'] = false;
	$response['field'] = 'status';
	$response['msg'] = 'Такой адрес почты уже зарегестрирован';
	die(json_encode($response, true));
}
if(!$_POST['ticket']){
	$response['status'] = false;
	$response['field'] = 'ticket';
	$response['msg'] = 'Не указан тип билета';
	die(json_encode($response, true));
}
$firstname = $_POST['name'];
$secondname = $_POST['secondname'];
$email =  $_POST['email'];
$ticket =  $_POST['ticket'];
$content = "$firstname,$secondname,$email,$ticket\n";
$name = "registration_" . date("d_m_Y") . '.txt';
$file = fopen("$name", "a+");
fwrite($file,$content,strlen($content));
fclose();
$response['msg'] = "Спасибо, заявка отправленна!";
die(json_encode($response, true));
