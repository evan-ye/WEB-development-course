<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : 'NULL';
        $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : 'NULL';
        $email = isset($_POST['email']) ? $_POST['email'] : 'NULL';
        $ticketType = isset($_POST['ticketType']) ? $_POST['ticketType'] : 'NULL';
    }
    if ($firstname !== "") {
        $allUsersFiles = scandir('users');
        for ($i=2; $i<count($allUsersFiles); $i++) {
            $usersFile = fopen("users/".$allUsersFiles[$i], 'r') or die("File opening error");
            $fileContent = fread($usersFile, filesize("users/".$allUsersFiles[$i]));
            fclose($usersFile);
            if (strpos($fileContent, $email)) {
                echo "User with such e-mail is already registered";
                break;
            } else {
                $today = date('d_m_Y');
                $todayUsersFile = fopen("users/registration_".$today.".txt", 'a+') or die("File opening error");
                fwrite($todayUsersFile, "$firstname,$lastname,$email,$ticketType\n");
                fclose($todayUsersFile);
                echo "New user created successfully";
            }
        }
    }
?>