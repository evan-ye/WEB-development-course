<?php

class XMLDataBase implements DataBaseEntity {
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
        $path = "users/xml/registration_".date('d_m_Y').".xml";
        return $path;
    }

    function createDataSource() {
        mkdir('users', 0777);
        mkdir('users/xml', 0777);
    }

    function createRecord() {
        if (!file_exists(self::getPath())) {
            $doc = new DOMDocument('1.0');

            $root = $doc->createElement('users');
            $doc->appendChild($root);

            $doc->save(self::getPath());
        }
    }

    function checkEmail($email, $response) {
        $doc = new DOMDocument();
        $doc->load(self::getPath());

        $emails = $doc->getElementsByTagName("email");

        foreach ($emails as $user_email) {
            if ($user_email->nodeValue == $email) {
                $response['errors']++;
                $response['email'] = false;
                $response['responseText'] = 'User with such e-mail is already registered';
                break;
            }
        }
        return $response;
    }

    function addUser($firstname, $lastname, $email, $ticketType) {
        $doc = new DOMDocument('1.0');
        $doc->formatOutput = true;
        $doc->preserveWhiteSpace = false;
        $doc->load(self::getPath());

        $user = $doc->createElement('user');
        $doc->firstChild->appendChild($user);

        $firstnameTag = $doc->createElement('firstname', $firstname);
        $user->appendChild($firstnameTag);
        $lastnameTag = $doc->createElement('lastname', $lastname);
        $user->appendChild($lastnameTag);
        $emailTag = $doc->createElement('email', $email);
        $user->appendChild($emailTag);
        $ticketTypeTag = $doc->createElement('ticketType', $ticketType);
        $user->appendChild($ticketTypeTag);

        $doc->save(self::getPath());
    }
}