<?php
if (isset($HTTP_RAW_POST_DATA)) {
  $inputs = $HTTP_RAW_POST_DATA;
}
else {
  $inputs = file_get_contents('php://input');
}

session_start();

if ($_POST['captcha'] != $_SESSION['captcha']) echo "The letters in the graphic were entered incorrectly. Please try again.";
else {
  $data = array();
  parse_str($inputs, $data);
  $firtsname = $data['firstname'];
  $lastname = $data['lastname'];
  $email = $data['email'];
  $ticket_type = $data['ticket_type'];
  $save_option = $data['save_option'];
  if ($save_option === "mysql") {
    $servername = "localhost";
    $username = "root";
    $password = ""; // type your password here if it needed
    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $conn->query("CREATE DATABASE IF NOT EXISTS myDB"); //save the data in database
    $conn->close();
    $conn = new mysqli($servername, $username, $password, 'myDB');
    $createTable = "CREATE TABLE IF NOT EXISTS users(
                          id int(4) NOT NULL auto_increment,
                          firstname varchar(50) NOT NULL default '',
                          lastname varchar(50) NOT NULL default '',
                          email varchar(50) NOT NULL default '',
                          ticket_type varchar(10) NOT NULL default '',
                          regdate timestamp NOT NULL default CURRENT_TIMESTAMP,
                          PRIMARY KEY (id)
                          )";
    $conn->query($createTable);
    $result = mysqli_query($conn, "SELECT email FROM users WHERE DATE(regdate) = CURDATE()");
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      if ($row['email'] == $email) {
        echo "This email already exists. Please try another email";
        return false;
      }
      else {
        $sql = "INSERT INTO users (firstname, lastname, email, ticket_type)
                              VALUES ('$firtsname', '$lastname', '$email', '$ticket_type')";
      }
    }

    $sql = "INSERT INTO users (firstname, lastname, email, ticket_type)
                              VALUES ('$firtsname', '$lastname', '$email', '$ticket_type')";
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    }
    else {
      echo "This email already exists. Please try another email";
    }

    $conn->close();
  }
  else
  if ($save_option === "file") { //save the data in txt
    $filelist = glob("*.txt");
    if ($filelist) {
      foreach(glob("*.txt") as $filename) {
        if (strpos(file_get_contents("$filename") , "$email")) {
          echo "This email already exists. Please try another email";
        }
        else {
          $newFile = fopen("txt_registration_" . date("d_m_Y") . ".txt", "a+");
          $mytext = "$firstname,$lastname,$email,$ticket_type\n";
          $test = fwrite($newFile, $mytext);
          if ($test) echo 'New record created successfully';
          else echo 'Error saving information.';
          fclose($newFile);
        }
      }
    }
    else {
      $newFile = fopen("txt_registration_" . date("d_m_Y") . ".txt", "a+");
      $mytext = "$firstname,$lastname,$email,$ticket_type\n";
      $test = fwrite($newFile, $mytext);
      if ($test) echo 'New record created successfully';
      else echo 'Error saving information.';
      fclose($newFile);
    }
  }
  else
  if ($save_option === "xml") { // save the data in xml
    function addUser($firstname, $lastname, $email, $ticket_type)
    {
      $dom = new DOMDocument('1.0', "utf-8");
      $dom->formatOutput = true;
      $dom->preserveWhiteSpace = false;
      $dom->load("xml_registration_" . date('d_m_Y') . ".xml");
      $user = $dom->createElement('user');
      $dom->firstChild->appendChild($user);
      $firstnameTag = $dom->createElement('firstname', $firstname);
      $user->appendChild($firstnameTag);
      $lastnameTag = $dom->createElement('lastname', $lastname);
      $user->appendChild($lastnameTag);
      $emailTag = $dom->createElement('email', $email);
      $user->appendChild($emailTag);
      $ticketTypeTag = $dom->createElement('ticketType', $ticket_type);
      $user->appendChild($ticketTypeTag);
      $dom->save("xml_registration_" . date('d_m_Y') . ".xml");
      echo 'New record created successfully';
    }

    function checkEmail($email)
    {
      $dom = new DOMDocument();
      $dom->load("xml_registration_" . date('d_m_Y') . ".xml");
      $emails = $dom->getElementsByTagName("email");
      foreach($emails as $users_email) {
        if ($users_email->nodeValue === $email) {
          return true;
        }
      }
    }

    if (!file_exists("xml_registration_" . date('d_m_Y') . ".xml")) {
      addUser($firstname, $lastname, $email, $ticket_type);
    }
    else {
      if (checkEmail($email)) {
        echo "This email already exists. Please try another email";
      }
      else {
        addUser($firstname, $lastname, $email, $ticket_type);
      }
    }
  }
}
?>
