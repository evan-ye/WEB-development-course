<?php

// Классы и объекты
/*class MyClass {
    //  определение свойств
    public $property1 = 'property1 value';
    protected $property2  =  "value2";
    private $property3;


    //  определение методов
    function myMethod($var1, $var2){
        print($this->property1);
    }
}*/


// Инициализация класса (создание объекта на основе класса)
//$myObj = new MyClass();

//$myObj2 = new MyClass();


// Доступ к свойствам класса
// $myObj->property1 = 'new value';

//echo $myObj->property1;

//echo $myObj2->property1;

// Вызов метода
// echo $myObj->myMethod(null, null);



// Конструкторы и деструкторы
/*class MyClass {
    public $property1 = 'property1 value';


    function  __construct($var){
        $this->property1  =  $var;
        echo  "Вызван  конструктор";
    }


    function  __destruct(){
        echo  "Вызван  деструктор";
    }

}*/

//Вызов конструктора
//$myObj = new MyClass('test');



//Вызов деструктора
//unset($myObj);


// Псевдо-константы применимые в OOP  __METHOD__ и __CLASS__

class MyClass {
    function myMethod(){
        echo "Вызов метода ", __METHOD__;
    }
    function getClassName(){
        echo "Имя класса ", __CLASS__;
    }
}

$obj = new MyClass();

// Вызов метода MyClass::myMethod
$obj->myMethod();


// Имя класса MyClass
$obj->getClassName();

