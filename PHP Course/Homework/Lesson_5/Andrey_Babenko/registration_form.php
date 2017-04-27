<?php
//Getting data
if (isset($HTTP_RAW_POST_DATA)) {
    $body = $HTTP_RAW_POST_DATA;
}
else {
    $body = file_get_contents('php://input');
}
$data = array();
parse_str($body, $data);

$firtsname = $data['firstname'];
$lastname = $data['lastname'];
$email = $data['email'];
$ticketType = $data['ticketType'];

// From validation
require_once ('classes/FormValidator.php');
$validator = new FormValidator();
$response = $validator->validateAll($firtsname, $lastname, $email , $ticketType);

// Main logic
if ($response['errors']) {
    $jsonResponse = json_encode($response);
    echo $jsonResponse;
} else {
    // Connect to host
    $conn = new mysqli('localhost', 'root', 'root');
    // Create database if not exists
    $conn->query("CREATE DATABASE IF NOT EXISTS andreyBabenkoDB");
    $conn->close();
    // Connect to DB
    $conn = new mysqli('localhost', 'root', 'root', 'andreyBabenkoDB');
    // Create table if not exists
    $createTableQuery = "CREATE TABLE IF NOT EXISTS users(
                          id int(4) NOT NULL auto_increment,
                          firstname varchar(50) NOT NULL default '',
                          lastname varchar(50) NOT NULL default '',
                          email varchar(50) NOT NULL default '',
                          ticketType varchar(10) NOT NULL default '',
                          regdate timestamp NOT NULL default CURRENT_TIMESTAMP,
                          PRIMARY KEY (id)
                          )
     ";
    $conn->query($createTableQuery);
    // Select today's user emails
    $selectTodayEmail = "SELECT email FROM users
                          WHERE DATE(regdate) = CURDATE() 
     ";
    $result = $conn->query($selectTodayEmail);
    // Email test for uniqueness
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['email'] == $email) {
            $response['email'] = false;
            $response['responseText'] = 'User with such e-mail is already registered';
            echo $response['email'];
            break;
        };
    };
    // Add new user
    if ($response['email']) {
        $addNewUserQuery = "INSERT INTO users (firstname, lastname, email, ticketType)
                              VALUES ('$firtsname', '$lastname', '$email', '$ticketType')
         ";
        if ($conn->query($addNewUserQuery));
        $response['responseText'] = "New user created successfully";
    }
    $conn->close();

    $jsonResponse = json_encode($response);
    echo $jsonResponse;
}