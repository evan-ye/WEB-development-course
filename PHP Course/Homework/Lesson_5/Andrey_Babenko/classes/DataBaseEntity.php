<?php

interface DataBaseEntity {

    static function createDataSource();

    static function createRecord();

    static function checkEmail($email, $response);

    static function addUser($firstname, $lastname, $email, $ticketType);
}