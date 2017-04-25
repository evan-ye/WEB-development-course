<?php
if (isset($HTTP_RAW_POST_DATA)) {
    $body = $HTTP_RAW_POST_DATA;
}
else {
    $body = file_get_contents('php://input');
}
$data = array();
parse_str($body, $data);

$response = [
    'errors' => -1,
    'firstname' => preg_match('/^[A-z-]+$/', $data['firstname']),
    'lastname' => preg_match('/^[A-z-]+$/', $data['lastname']),
    'email' => preg_match('/^([A-z0-9_\.-]+)@([A-z0-9_\.-]+)\.([A-z\.]{2,6})$/', $data['email']),
    'ticketType' => $data['ticketType'] === 'free' or $data['ticketType'] === 'standard' or $data['ticketType'] === 'premium'
];

foreach ($response as $key => $value) {
    if ($value != 1) $response['errors']++;
}


if ($response['errors']) {
    $jsonResponse = json_encode($response);
    echo $jsonResponse;
} else {
    $allUsersFiles = scandir('users');
    foreach ($allUsersFiles as $file) {
        if ($file[0] == ".") continue;
        $fileContent = file("users/".$file, FILE_SKIP_EMPTY_LINES);
        foreach ($fileContent as $userDataString) {
            $userData = explode(",", $userDataString);
            if ($userData[2] == $data['email']) {
                $response['email'] = false;
                $response['responseText'] = 'User with such e-mail is already registered';
                break 2;
            }
        }
    }

    if ($response['email']) {
        $todayUsersFile = fopen("users/registration_".date('d_m_Y').".txt", 'a+') or die("File opening error");
        fwrite($todayUsersFile, $data['firstname'].",".$data['lastname'].",".$data['email'].",".$data['ticketType']."\n");
        fclose($todayUsersFile);
        $response['responseText'] = "New user created successfully";
    }

    $jsonResponse = json_encode($response);
    echo $jsonResponse;
}
?>