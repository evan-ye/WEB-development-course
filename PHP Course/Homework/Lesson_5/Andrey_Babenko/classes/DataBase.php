<?php
class DataBase {
    private static $host = 'localhost';
    private static $username = 'root';
    private static $password = 'root';
    private static $database = 'andreyBabenkoDB';

    public static function createDB() {
        // Connect to host
        $pdo = new PDO('mysql:host='.self::$host , self::$username, self::$password);
        $pdo->exec("CREATE DATABASE IF NOT EXISTS ".self::$database);
        $pdo = null;
    }

    public static function openConn() {
        $pdo = new PDO('mysql:host='.self::$host.';dbname='.self::$database , self::$username, self::$password);
        return $pdo;
    }

    public static function createTable($pdo) {
        // Create table if not exists
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
        $pdo->exec($createTableQuery);
    }

    public static function checkEmail($pdo, $email, $response) {
        // Select today's user emails
        $selectTodayEmail = "SELECT email FROM users
                          WHERE DATE(regdate) = CURDATE() 
     ";
        $stmt = $pdo->query($selectTodayEmail);
        // Email test for uniqueness
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($row['email'] == $email) {
                $response['email'] = false;
                $response['responseText'] = 'User with such e-mail is already registered';
                break;
            };
        };
        return $response;
    }

    public static function addUser($pdo, $firstname, $lastname, $email, $ticketType) {
        $addNewUserQuery = "INSERT INTO users (firstname, lastname, email, ticketType)
                              VALUES ('$firstname', '$lastname', '$email', '$ticketType')
         ";
        $pdo->exec($addNewUserQuery);
    }
}