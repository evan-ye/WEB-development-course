<?php
header('Content-Type: text/html; charset=utf-8');
require 'autoload.php';
require 'connect.php';

$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$email = $_POST['email'];
$ticket = $_POST['ticket'];



$user = new user($firstname,$secondname,$email, $ticket);

$user->validateFields();

if($user->valid == true){

	$db->insertNew($user);

}
