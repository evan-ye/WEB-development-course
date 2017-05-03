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

$firstname = $data['firstname'];
$lastname = $data['lastname'];
$email = $data['email'];
$ticketType = $data['ticketType'];

// From validation
require_once ('classes/FormValidator.php');
$response = FormValidator::validateAll($firstname, $lastname, $email , $ticketType);

// Main logic
if ($response['errors']) {
    $jsonResponse = json_encode($response);
    echo $jsonResponse;
} else {
    require_once('classes/DataBase.php');
    DataBase::createDB();
    $conn = new mysqli('localhost', 'root', 'root', 'andreyBabenkoDB');
    DataBase::createTable($conn);
    $response = DataBase::checkEmail($conn, $email, $response);
    // Add new user
    if ($response['email']) {
        DataBase::addUser($conn, $firstname, $lastname, $email, $ticketType);
        $response['responseText'] = "New user created successfully";
    }
    $conn->close();

    $jsonResponse = json_encode($response);
    echo $jsonResponse;
}