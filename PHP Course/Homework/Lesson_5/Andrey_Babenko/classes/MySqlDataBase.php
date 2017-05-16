<?php

class MySqlDataBase implements DataBaseEntity {
    private static $host = 'localhost';
    private static $username = 'root';
    private static $password = 'root';
    private static $database = 'andreyBabenkoDB';

    private function openConn() {
        $conn = new PDO('mysql:host='.self::$host.';dbname='.self::$database , self::$username, self::$password);
        return $conn;
    }

    public static function createDB() {
        $conn = new PDO('mysql:host='.self::$host , self::$username, self::$password);
        $conn->exec("CREATE DATABASE IF NOT EXISTS ".self::$database);
    }

    public static function createTable() {
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
        $conn = self::openConn();
        $conn->exec($createTableQuery);
    }

    public static function checkEmail($email, $response) {
        $selectTodayEmail = "SELECT email FROM users
                          WHERE DATE(regdate) = CURDATE() 
     ";
        $conn = self::openConn();
        $stmt = $conn->query($selectTodayEmail);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($row['email'] == $email) {
                $response['email'] = false;
                $response['responseText'] = 'User with such e-mail is already registered';
                break;
            };
        };
        return $response;
    }

    public static function addUser($firstname, $lastname, $email, $ticketType) {
        $conn = self::openConn();
        $addNewUserQuery = "INSERT INTO users (firstname, lastname, email, ticketType)
                              VALUES ('$firstname', '$lastname', '$email', '$ticketType')
         ";
        $conn->exec($addNewUserQuery);
    }
}