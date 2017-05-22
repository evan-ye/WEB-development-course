<?php

class FileDataBase implements DataBaseEntity {

    private function getPath() {
        $path = "users/txt/registration_".date('d_m_Y').".txt";
        return $path;
    }

    private function openConn() {
        $conn = fopen(self::getPath(), 'a+');
        return $conn;
    }

    public static function createDataSource() {
        mkdir('users', 0777);
        mkdir('users/txt', 0777);
    }

    public static function createRecord() {
        //Empty function
    }

    public static function checkEmail($email, $response) {
        $fileContent = file(self::getPath(), FILE_SKIP_EMPTY_LINES);
        foreach ($fileContent as $userDataString) {
            $userData = explode(",", $userDataString);
            if ($userData[2] == $email) {
                $response['email'] = false;
                $response['responseText'] = 'User with such e-mail is already registered';
                break;
            }
        }
        return $response;
    }

    public static function addUser($firstname, $lastname, $email, $ticketType) {
        $conn = self::openConn();
        fwrite($conn, $firstname.",".$lastname.",".$email.",".$ticketType."\n");
        fclose($conn);
    }
}