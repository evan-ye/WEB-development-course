<?php

interface DataBaseEntity {

    function createDataSource();

    function createRecord();

    function checkEmail($email, $response);

    function addUser($firstname, $lastname, $email, $ticketType);
}