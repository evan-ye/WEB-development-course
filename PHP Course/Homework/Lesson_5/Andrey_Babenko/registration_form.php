<?php
// Class autoload
function loadClass ($class_name) {
    require_once "classes/".$class_name.".php";
}
spl_autoload_register('loadClass');
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
$response = FormValidator::validateAll($firstname, $lastname, $email, $ticketType);

// Main logic
if ($response['errors']) {
    $jsonResponse = json_encode($response);
    echo $jsonResponse;
} else {
    DataBase::createDB();
    $pdo = DataBase::openConn();
    DataBase::createTable($pdo);
    $response = DataBase::checkEmail($pdo, $email, $response);
    if ($response['email']) {
        $result = DataBase::addUser($pdo, $firstname, $lastname, $email, $ticketType);
        $response['responseText'] = "New user created successfully";
    }
    $pdo = null;
    $jsonResponse = json_encode($response);
    echo $jsonResponse;
}