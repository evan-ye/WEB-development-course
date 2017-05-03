<?php

require_once('userreg.php');
$body = file_get_contents('php://input');
$data = array();
parse_str($body, $data);

$newUser = new UserReg($data['name'], $data['lastname'], $data['email'], $data['ticket']);

	if (count($data) > 0) {
		$newUser->doTrimData();
		$newUser->getValidation();
	}
	else {
		echo "Please. Fill in the fields.</br>";
	}

?>