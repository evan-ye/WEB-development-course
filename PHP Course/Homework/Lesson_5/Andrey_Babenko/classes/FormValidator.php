<?php

class FormValidator {
    public static function validateName($name) {
        return preg_match('/^[A-z-]+$/', $name);
    }

    public static function validateEmail($email) {
        return preg_match('/^([A-z0-9_\.-]+)@([A-z0-9_\.-]+)\.([A-z\.]{2,6})$/', $email);
    }

    public static function validateTicketType($ticketType) {
        return $ticketType === 'free' or $ticketType === 'standard' or $ticketType === 'premium';
    }

    public static function validateAll($firstname, $lastname, $email, $ticketType, $checkText) {
        $response = [
            'errors' => -1,
            'firstname' => self::validateName($firstname),
            'lastname' => self::validateName($lastname),
            'email' => self::validateEmail($email),
            'ticketType' => self::validateTicketType($ticketType),
            'checkText' => Captcha::checkCaptcha($checkText)
        ];

        foreach ($response as $key => $value) {
            if ($value != 1) $response['errors']++;
        }

        return $response;
    }
}