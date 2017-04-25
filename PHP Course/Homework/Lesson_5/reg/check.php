<?php
require 'functions.php';
$email = $_POST['email'];

if(checkEmail($email) == false){
	echo "exist";
}else{
	echo "new";
}