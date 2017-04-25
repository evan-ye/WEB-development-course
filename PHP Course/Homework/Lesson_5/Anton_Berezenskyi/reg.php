<?php
	$body = file_get_contents('php://input');
	$data = array();
	parse_str($body, $data);

	if (count($data) > 0) {
		$name = trim($data['name']);
		$lastname = trim($data['lastname']);
		$email = trim($data['email']);
		$ticket = ($data['ticket']);

		if (strlen($name) === 0) {
			echo "Enter Name.</br>";
		}
		if (strlen($lastname) === 0) {
			echo "Enter Last name.</br>";
		}
		if (strlen($email) === 0) {
			echo "Enter email.</br>";
		} else if ((preg_match("~^([a-z0-9_\-\.])+@([a-z0-9_\-\.])+\.([a-z0-9])+$~i", $email)) === 0) {
			echo "Enter valid email.</br>";
		} else if (file_exists('regs/registration_ ' . date('d_m_Y') . '.txt')){
			$f = fopen('regs/registration_ ' . date('d_m_Y') . '.txt',"r");
			$file = fread($f, filesize('regs/registration_ ' . date('d_m_Y') . '.txt'));
			if (stristr($file, $email) === false) {
				file_put_contents('regs/registration_ ' . date('d_m_Y') . '.txt', "$name, $lastname, $email, $ticket\r\n", FILE_APPEND);
				echo "<span style='color: green'>Registration completed successfully.</span></br>";
			} else {
				echo "You are already registered</br>";
			}
		}
		else {
			$dirs = glob('regs/*.txt');
			$file = '';
			for ($i = 0; $i < count($dirs); $i++) {
				$f = fopen("$dirs[$i]", "r");
				$file = $file . fread($f, filesize("$dirs[$i]"));
			}
			if (stristr($file, $email) === false) {
				file_put_contents('regs/registration_ ' . date('d_m_Y') . '.txt', "$name, $lastname, $email, $ticket\r\n", FILE_APPEND);
				echo "<span style='color: green'>Registration completed successfully.</span></br>";
			} else {
				echo "You are already registered</br>";
			}
		}
	}
	else {
		echo "Please. Fill in the fields.</br>";
	}

?>