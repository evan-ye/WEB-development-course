<?php
require 'connect.php';
$email = $_POST['email'];
$query = "SELECT * FROM users WHERE email = '".$email."'"; 

$result = $db->query($query);
if($result->num_rows != 0){
	echo '{"status" : false, "msg" : "Такой адрес уже зарегестрирован"}';
}
else{
	echo '{"status" : true, "msg" : "ok"}';
}
