<?php

class FileDataBase implements DataBaseEntity {
    private static $instance = null;
    private function __construct() {}
    private function __clone() {}

    function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function getPath() {
        $path = "users/txt/registration_".date('d_m_Y').".txt";
        return $path;
    }

    private function openConn() {
        $conn = fopen(self::getPath(), 'a+');
        return $conn;
    }

    function createDataSource() {
        mkdir('users', 0777);
        mkdir('users/txt', 0777);
    }

    function createRecord() {
        //Empty function
    }

    function checkEmail($email, $response) {
        $fileContent = file(self::getPath(), FILE_SKIP_EMPTY_LINES);
        $users = new UsersIterator($fileContent);
        foreach ($users as $userDataString) {
            $userData = explode(",", $userDataString);
            if ($userData[2] == $email) {
                $response['errors']++;
                $response['responseText'] = 'User with such e-mail is already registered';
                break;
            }
        }
        return $response;
    }

    function addUser($firstname, $lastname, $email, $ticketType) {
        $conn = self::openConn();
        fwrite($conn, $firstname.",".$lastname.",".$email.",".$ticketType."\n");
        fclose($conn);
    }
}