<?php

class XMLDataBase implements DataBaseEntity {

    private function getPath() {
        $path = "users/xml/registration_".date('d_m_Y').".xml";
        return $path;
    }

    static function createDB() {
        mkdir('users', 0777);
        mkdir('users/xml', 0777);
    }

    static function createTable() {
        if (!file_exists(self::getPath())) {
            $doc = new DOMDocument('1.0');

            $root = $doc->createElement('users');
            $doc->appendChild($root);

            $doc->save(self::getPath());
        }
    }

    static function checkEmail($email, $response) {
        $doc = new DOMDocument();
        $doc->load(self::getPath());

        $emails = $doc->getElementsByTagName("email");

        foreach ($emails as $user_email) {
            if ($user_email->nodeValue == $email) {
                $response['email'] = false;
                $response['responseText'] = 'User with such e-mail is already registered';
                break;
            }
        }
        return $response;
    }

    static function addUser($firstname, $lastname, $email, $ticketType) {
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