<?php
class DataBase {
    public static function createDB() {
        // Connect to host
        $conn = new mysqli('localhost', 'root', 'root');
        // Create database if not exists
        $conn->query("CREATE DATABASE IF NOT EXISTS andreyBabenkoDB");
        $conn->close();
    }

    public static function createTable($conn) {
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
        $conn->query($createTableQuery);
    }

    public static function checkEmail($conn, $email, $response) {
        // Select today's user emails
        $selectTodayEmail = "SELECT email FROM users
                          WHERE DATE(regdate) = CURDATE() 
     ";
        $result = $conn->query($selectTodayEmail);
        // Email test for uniqueness
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['email'] == $email) {
                $response['email'] = false;
                $response['responseText'] = 'User with such e-mail is already registered';
                break;
            };
        };
        return $response;
    }

    public static function addUser($conn, $firstname, $lastname, $email, $ticketType) {
        $addNewUserQuery = "INSERT INTO users (firstname, lastname, email, ticketType)
                              VALUES ('$firstname', '$lastname', '$email', '$ticketType')
         ";
        $conn->query($addNewUserQuery);
    }
}