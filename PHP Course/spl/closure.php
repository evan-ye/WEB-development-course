<?php

// Closure

/*
function Hello($name){
    echo "Привет, $name";
}

$func = "Hello";
$func("Мир!");
*/



// Анонимная функция
/*
$func = function($name) {
    echo "Привет, $name\n";
};
$func("Мир!");

*/


// Использование

$arr = [1, 2, 3, 4, 5];

// Стандартный вариант
/*
function foo($v){
    return $v * 10;
}
$new_arr = array_map(foo, $arr);
*/


// Deprecated
// $new_arr = array_map(create_function('$v', '$v * 10;'), $arr);


// Анонимная функция
/*
$new_arr = array_map( function($v){
                        return $v * 10;
                      }, $arr);
*/

// Closure (замыкание)
/*
$string = "Hello, world!";
$closure = function() use ($string) {
    echo $string;
};

$closure();
*/


// Передача по ссылке
/*
$x = 0;
$closure = function() use (&$x) {
    ++$x;
};
echo $x;
$closure();
echo $x;
*/


// Использование
/*
$mult = function($num){
    return function($x) use ($num){
        return $x * $num;
    };
};
$mult_by_2 = $mult(2);
$mult_by_3 = $mult(3);
echo $mult_by_2(2); // 4
echo $mult_by_2(5); // 10
echo $mult_by_3(5);

*/


// Использование в классах
class User {
    private $_name;

    public function __construct($name){
        $this->_name = $name;
    }

    public function greet($greeting){
        return function() use ($greeting) {
            return "$greeting {$this->_name}!";
        };
    }
}

$user = new User("John");

$en = $user->greet("Hello");
echo $en();

$ru = $user->greet("Привет");
echo $ru();








