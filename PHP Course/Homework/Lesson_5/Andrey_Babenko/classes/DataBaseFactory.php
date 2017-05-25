<?php

class DataBaseFactory implements DataBaseFactoryEntity {
    static function createDataBase($saveOption) {
        require ($saveOption . '.php');
        $database = $saveOption::getInstance();
        return $database;
    }

}