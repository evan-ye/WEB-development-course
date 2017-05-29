<?php

class UsersIterator implements Iterator {

    private $users = [];

    public function __construct($array){
        if (is_array($array)) {
            $this->users = $array;
        }
    }

    public function current() {
        return current($this->users);
    }

    public function next() {
        return next($this->users);
    }

    public function key() {
        return key($this->users);
    }

    public function valid() {
        return $this->current() !== false;
    }

    public function rewind() {
        reset($this->users);
    }
}