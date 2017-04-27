<?php
require 'connect.php';

if($result = $db->query("SELECT * FROM  `users` WHERE email = 'suoe@ggg.com' " )){
	if($result->num_rows){
		print_r($num_rows);
	}
}