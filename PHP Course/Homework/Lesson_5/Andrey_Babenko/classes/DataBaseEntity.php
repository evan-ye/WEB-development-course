<?php

interface DataBaseEntity {

    static function createDB();

    static function createTable();

    static function checkEmail($email, $response);

    static function addUser($firstname, $lastname, $email, $ticketType);
}