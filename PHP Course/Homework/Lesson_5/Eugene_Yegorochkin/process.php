<?php
if (isset($HTTP_RAW_POST_DATA)) {
    $inputs = $HTTP_RAW_POST_DATA;
}
else {
    $inputs = file_get_contents('php://input');
}

session_start();
if($_POST['capcha'] != $_SESSION['capcha']) 
    echo "The letters in the graphic were entered incorrectly. Please try again.";
else {


$data = array();
parse_str($inputs, $data);
$firtsname = $data['firstname'];
$lastname = $data['lastname'];
$email = $data['email'];
$ticket_type = $data['ticket_type'];

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

 $conn->query("CREATE DATABASE IF NOT EXISTS myDB");
    $conn->close();

 $conn = new mysqli('localhost', 'root', '', 'myDB');

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


while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
// print_r($row);
if ($row['email'] == $email) {
            break;
        } else {
                
                $sql = "INSERT INTO users (firstname, lastname, email, ticket_type)
                              VALUES ('$firtsname', '$lastname', '$email', '$ticket_type')";

        }

       
}


$sql = "INSERT INTO users (firstname, lastname, email, ticket_type)
                              VALUES ('$firtsname', '$lastname', '$email', '$ticket_type')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "This email already exists. Please try another email";
}
    
    $conn->close();


}
?>