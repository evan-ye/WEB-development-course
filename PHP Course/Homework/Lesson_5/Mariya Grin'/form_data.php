<?php

  $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['e-mail'];
    $ticketType = $_POST['ticket_type'];

    if ($name == "") {
    echo "Please enter your name";
  }else if ($surname == ""){
  	echo "Please enter your surname";
  }else if ($email == ""){
  	echo "Please enter your e-mail";
  }else if ($ticketType == ""){
  	echo "Please choose ticket's type";
  }else
	// echo $name,", ",$surname,", ",$email,", ",$ticketType;

$date = date_create();
$file_name = "registration". date_format($date, '_d_m_y') . ".txt";

$open_file = fopen($file_name, "a+");
fwrite($open_file, $name);
fwrite($open_file, ', ');
fwrite($open_file, $surname);
fwrite($open_file, ', '); 
fwrite($open_file, $email);
fwrite($open_file, ', ');
fwrite($open_file, $ticketType);

fclose($open_file);

$open_file = fopen($file_name, "r");

echo fgetss($open_file);
fclose($open_file);


?>
