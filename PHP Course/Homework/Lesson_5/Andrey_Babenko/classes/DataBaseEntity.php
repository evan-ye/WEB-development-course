<?php

interface DataBaseEntity {

    function createRecord();

    function checkEmail($email, $response);

    function addUser($firstname, $lastname, $email, $ticketType);
}