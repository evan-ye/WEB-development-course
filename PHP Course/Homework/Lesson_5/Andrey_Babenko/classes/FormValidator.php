<?php

class FormValidator {
    public function validateName($name) {
        return preg_match('/^[A-z-]+$/', $name);
    }

    public function validateEmail($email) {
        return preg_match('/^([A-z0-9_\.-]+)@([A-z0-9_\.-]+)\.([A-z\.]{2,6})$/', $email);
    }

    public function validateTicketType($ticketType) {
        return $ticketType === 'free' or $ticketType === 'standard' or $ticketType === 'premium';
    }

    public function validateAll($firstname, $lastname, $email, $ticketType) {
        $response = [
            'errors' => -1,
            'firstname' => $this->validateName($firstname),
            'lastname' => $this->validateName($lastname),
            'email' => $this->validateEmail($email),
            'ticketType' => $this->validateTicketType($ticketType)
        ];

        foreach ($response as $key => $value) {
            if ($value != 1) $response['errors']++;
        }

        return $response;
    }
}