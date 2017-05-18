<?php
require 'autoload.php';
require 'connect.php';

if($db->checkEmail($_POST['email']) == 0){
	response::$status = "fail";
	response::$msg = "Такой адрес уже есть в базе.";
	response::send();
}else{
	response::$status = "ok";
	response::$msg = "";
	response::send();
}