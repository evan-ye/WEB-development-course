<?php

class MySqlDataBase implements DataBaseEntity {

    private static $instance = null;
    private function __construct() {
        $this->conn = new PDO('mysql:host='. $this->host ,  $this->username,  $this->password);
        $this->conn->exec("CREATE DATABASE IF NOT EXISTS ". $this->database);
        $this->conn->exec("use ". $this->database);
    }
    private function __clone() {}
    private $conn = null;
    private $host = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $database = 'andreyBabenkoDB';

    static function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    function createRecord() {
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
        $this->conn->exec($createTableQuery);
    }

    function checkEmail($email, $response) {
        $selectTodayEmail = "SELECT email FROM users
                          WHERE DATE(regdate) = CURDATE() 
     ";
        $stmt = $this->conn->query($selectTodayEmail);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($row['email'] == $email) {
                $response['errors']++;
                $response['responseText'] = 'User with such e-mail is already registered';
                break;
            };
        };
        return $response;
    }

    function addUser($firstname, $lastname, $email, $ticketType) {
        $addNewUserQuery = "INSERT INTO users (firstname, lastname, email, ticketType)
                              VALUES ('$firstname', '$lastname', '$email', '$ticketType')
         ";
        $this->conn->exec($addNewUserQuery);
    }
}