<?php

class FileDataBase implements DataBaseEntity {
    private static $instance = null;
    private function __construct() {
        mkdir('users', 0777);
        mkdir('users/txt', 0777);
        $this->conn = fopen($this->getPath(), 'a+');
    }
    private function __clone() {}
    private $conn = null;

    function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function getPath() { return "users/txt/registration_".date('d_m_Y').".txt"; }

    function createRecord() { }

    function checkEmail($email, $response) {
        $file = new SplFileObject($this->getPath());
        foreach($file as $line) {
            $userData = explode(",", $line);
            if ($userData[2] == $email) {
                $response['errors']++;
                $response['responseText'] = 'User with such e-mail is already registered';
                break;
            }
        }
        return $response;
    }

    function addUser($firstname, $lastname, $email, $ticketType) {
        fwrite($this->conn, $firstname.",".$lastname.",".$email.",".$ticketType."\n");
        fclose($this->conn);
    }
}

