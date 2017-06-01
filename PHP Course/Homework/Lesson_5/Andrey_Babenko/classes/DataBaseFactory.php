<?php

class DataBaseFactory implements DataBaseFactoryEntity {
    static function createDataBase($saveOption) {
        return $saveOption::getInstance();
    }

}