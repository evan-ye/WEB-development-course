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
$checkText = $data['checkText'];
$saveOption = $data['saveOption'];

// From validation
$response = FormValidator::validateAll($firstname, $lastname, $email, $ticketType, $checkText);

if (!Captcha::checkCaptcha($checkText)) {
    $response['errors']++;
}

// Main logic
if (!$response['errors']) {
    $database = DataBaseFactory::createDataBase($saveOption);
    $database->createDataSource();
    $database->createRecord();
    $response = $database->checkEmail($email, $response);
    if (!$response['errors']) {
        $result = $database->addUser($firstname, $lastname, $email, $ticketType);
        $response['responseText'] = "New user created successfully";
    }
}
$jsonResponse = json_encode($response);
echo $jsonResponse;