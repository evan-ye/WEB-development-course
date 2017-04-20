 <?php
 	if(($_SERVER['REQUEST_METHOD']) === "POST") 
 	{
 		$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : NULL;
 		//unset($_POST['firstname']);
 		$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : NULL;
 		$email = isset($_POST['email']) ? $_POST['email'] : NULL;
 		$ticketType = isset($_POST['ticketType']) ? $_POST['ticketType'] : NULL;
 	}

 	if ($firstName !== NULL) 
 	{
		$userFiles = scandir('users');
 		foreach($userFiles as $value) 
 		 {
 		 	if (strpos(file_get_contents($value), $email)) 
 		 	{
                echo "User with this email is already registered.";
 		 	}
 		 	else
 		 	{
 		 		$newFile = fopen("/users/registration_".date("d_m_Y") . ".txt", "a+");
 		 		$string  = "$firstName,$lastName,$email,$ticketType\n";
 		 		$test    = fwrite($newFile, $string);
                if ($test)
                    echo 'Successfully saved.';
                else
                    echo 'Error saving the information.';
                fclose($newFile);
 		 	}	
 		}
	}

?>
 