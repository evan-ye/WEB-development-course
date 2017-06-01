<?php
function checkEmail($email){
	$files = glob("*.txt");
	foreach($files as $file_name){
		$file = fopen($file_name, "r");
		if ($file) {
			while (($line = fgets($file)) !== false) {
				$line = explode(',', $line);
				if($line[2] == $email){
					return false;
				}
			}
			return true;
			fclose($file);
		}
	}
}