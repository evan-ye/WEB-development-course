<?php
echo "<pre>";

// ArrayAccess

/*
abstract public boolean offsetExists(mixed $offset) — существует ли значение по заданному ключу;
abstract public mixed offsetGet(mixed $offset) — получить значение по индексу;
abstract public void offsetSet(mixed $offset, mixed $value) — установить значение с указанием индекса;
abstract public void offsetUnset(mixed $offset) — удалить значение.
*/


class obj implements ArrayAccess {
    private $container = array();

    public function __construct() {
        $this->container = array(
            "one" => 1,
            "two" => 2,
            "three" => 3,
        );
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
}


$obj = new obj;

var_dump(isset($obj["two"]));
var_dump($obj["two"]);
unset($obj["two"]);
var_dump($obj["two"]);
$obj["two"] = "A value";
var_dump($obj["two"]);
$obj[] = 'Append 1';
$obj[] = 'Append 2';
$obj[] = 'Append 3';
print_r($obj);



echo "</pre>";






