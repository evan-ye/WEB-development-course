  <?php

 $body = file_get_contents('php://input');
parse_str($body, $data);
$exist = false;
//сделать регулярные !!!!!!!!!!!!!!!!!!!!!
if ($data['firstName'] && preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $data['email']) && 
    preg_match('/^[A-z]+$/', $data['firstName']) && preg_match('/^[[A-z-]+$/', $data['lastName'])) 
 {

 	$userFiles = scandir('users');
   	foreach($userFiles as $value)
{     
   $contents = file_get_contents("C:\MAMP\htdocs\users\/registration_25_04_2017.txt");//ОШИБКА!!!!!!!!!!!
   $a = strpos($contents, $data['email']);
     if($a)
    {
        echo "User with this email is already registered";
        $exist=true;
        break;
 	}
}

if (!$exist) {

 		$newFile = fopen("users/registration_".date("d_m_Y") . ".txt", "a+");
 		$string  = $data['firstName']. ",".  $data['lastName']. "," . $data['email'] . "," . $data['ticketType']."\r\n";
 		$test    = fwrite($newFile, $string);
 		 if ($test) {
                   echo 'Successfully saved.';
               }
                else {
                    echo 'Error saving the information.';
                    fclose($newFile);
                }
}
}

?>
 
