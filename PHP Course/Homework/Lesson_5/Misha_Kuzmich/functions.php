<?php
function checkEmail($email){
	$files = glob("*.txt");
	foreach($files as $file_name){
		$handle = fopen($file_name, "r");
		if ($handle){
			if(fgets($handle)){
				while (($line = fgets($handle)) != '' ) {
					$line = explode(",", $line);
					if($line[2] == $email){
						return false;
					}
					else{
						return true;
					}
				}
			}
			else{
				return true;
			}
			fclose($handle);
		}
	}
}
