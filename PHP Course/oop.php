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

/*
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
*/



// Новые принципы работы с объектами

/*
class MyClass {
    public $property;
}


$myObj =  new MyClass();
$myObj->property = 1;

$myObj2 = $myObj;
$myObj2->property = 2;


echo $myObj->property, '<br>';
echo $myObj2->property, '<br>';*/


// Клонирование объекта

/*class  MyClass  {
    public  $property;
}
$myObj = new MyClass();
$myObj->property = 1;

$myObj2 = clone $myObj;
$myObj2->property = 2;


echo $myObj->property, '<br>';
echo $myObj2->property, '<br>';
*/



// Метод __clone()

/*class MyClass  {
    public $property;
    function  __clone(){
        $this->property  =  2;
    }
}

$myObj = new MyClass();
$myObj->property = 1;

$myObj2 = clone $myObj;

echo $myObj->property, '<br>';
echo $myObj2->property, '<br>';*/



// Наследование

/*
class Car {
    public $numWheels  =  4;
    function printWheels() {
        echo $this->numWheels;
    }
}


class Toyota extends Car  {
    public $country = 'Japan';
    function printCountry() {
        echo $this->country;
    }
}


$myCar = new Toyota();

$myCar->printCountry();
$myCar->printWheels();
*/



// Перегрузка методов

/*
class Car {
    public $numWheels = 4;
    function printWheels() {
        echo $this->numWheels;
    }
}

class Toyota extends Car  {
    public $country = 'Japan';
    function printCountry() {
        echo $this->country;
    }

    function printWheels() {
        echo "Перегруженный  метод  printWheels()  ";
    }
}

$myCar = new Toyota();

$myCar->printCountry();
$myCar->printWheels();
*/


// Parent

/*
class Car {
    public $numWheels = 4;
    function printWheels() {
        echo $this->numWheels;
    }
}

class Toyota extends Car  {
    public $country = 'Japan';
    function printCountry() {
        echo $this->country;
    }

    function printWheels() {
        echo "Перегруженный  метод  printWheels()  ";
        parent::printWheels();
    }
}

$myCar = new Toyota();

$myCar->printCountry();
$myCar->printWheels();
*/



// Спецификаторы доступа

/*
class  MyClass {
    public $public = 1;
    protected $protected = 2;
    private $private = 3;

    function  myMethod(){
        echo  $this->public, "<br>";  //ДА
        echo  $this->protected, "<br>";  //ДА
        echo  $this->private, "<br>";  //ДА
    }
}


$obj =  new  MyClass();
$obj->myMethod();

echo  $obj->public, "<br>";  //ДА
echo  $obj->protected, "<br>";  //НЕТ
echo  $obj->private, "<br>";  //НЕТ
*/



/*
class NewClass extends MyClass  {
    function  newMethod(){
        echo  $this->protected;  //ДА
        echo  $this->private;  //НЕТ
        // К private можно обратиться только используя метод родительского класса в котором он был объявлен.
        $this->myMethod();
    }
}
$obj1 = new NewClass();
echo  $obj1->public;  //ДА
echo  $obj1->protected;  //НЕТ!
echo  $obj1->private;  //НЕТ
$obj1->newMethod();
*/



// Обработка исключений

/*
try  {
    $a  =  1;
    $b  =  2;
    if($b  ==  0) throw new Exception("Деление на 0!"); // Генерируем исключение
// Экземпляр класса Exception создается на лету и записываетя в переменную  $e в catch
    echo  $a/$b;
} catch(Exception  $e){ // Строгая типизация, указывается что в переменной $e может быть только экземпляр класса Exception
    echo  "Произошла  ошибка  -  ",
    $e->getMessage(), //  Выводит  сообщение в строке,
    $e->getLine(),    //  Выводит  номер  строки файла,
    $e->getFile();    //  Выводит  имя  файла
}
finally {
    echo "Это finally.\n";
}
*/



// Создание собственных исключений

/*
class MathException extends Exception {
    function __construct($message) {
        parent::__construct($message);
        $message .= " в вычислениях";
    }
}

class LogicalException extends Exception {
    function __construct($message) {
        parent::__construct($message);
        $message .= " в логике";
    }
}


try {
    $a = -1;
    $b = 0;
    if ($b == 0) throw new MathException("Произошла ошибка");
    if ($b > $a) throw new LogicalException("Что-то не так");
    echo $a / $b;
} catch (MathException $e) {
    echo $e->getMessage(),
    " в строке ", $e->getLine(),
    " файла ", $e->getFile();
} catch (LogicalException $e) {
    echo $e->getMessage(),
    " в строке ", $e->getLine(),
    " файла ", $e->getFile();
}
*/



// Перебор свойств объекта

/*
class Human {
    public $name;
    public $yearOfBorn;
    function __construct($name, $yearOfBorn){
        $this->name = $name;
        $this->yearOfBorn = $yearOfBorn;
    }
}

$billGates = new Human('Bill Gates',1955);
foreach($billGates as $name=>$value){
    print($name.': '.$value.'<br />');
}
*/




// Константы класса

/*
class  Human  {
    const  HANDS  =  2;
    function  printHands(){
        print  (self::HANDS); //  NOT  $this!
    }
}

print  ('Количество  рук:  '.Human::HANDS);
*/



// Абстрактные методы и классы

/*
abstract class Car {
    public $petrol;
    function startEngine(){
        print('Start Engine!');
    }
    abstract function stopEngine();
}

class InjectorCar extends Car {
    public function stopEngine(){
        print('Stop Engine!');
    }
}

// $myMegaCar = new Car(); //Ошибка!
$myMegaCar = new InjectorCar();
$myMegaCar->startEngine();
$myMegaCar->stopEngine();
*/



// Интерфейсы

/*
interface Hand {
    function useKeyboard();
    function touchNose();
}

interface Foot {
    function runFast();
    function playFootball();
}

class Human implements Hand, Foot {
    public function useKeyboard() {
        echo 'Use keyboard!';
    }
    public function touchNose() {
        echo 'Touch nose!';
    }
    public function runFast() {
        echo 'Run fast!';
    }
    public function playFootball(){
        echo 'Play football!';
    }
}

$vasyaPupkin = new Human();
$vasyaPupkin->touchNose();
*/



// Финальные методы

/*
class Mathematics  {
    final function countSum($a,$b){
        print('Сумма:  '  .  $a  +  $b);
    }
}


class Algebra extends Mathematics  {
    //  Возникнет ошибка
    public function countSum($a,$b){
        $c  =  $a  +  $b;
        print("Сумма $a и $b: $c");
    }
}
*/


// Финальные классы

/*
final class Breakfast {
    function eatFood($food){
        print("eat $food!");
    }
}

// Возникнет ошибка
class McBreakfast extends Breakfast {

}
*/



// Статические свойства и методы класса

/*
class SocialLikes {
    static $likersCount = 0;
    function __construct(){
        ++self::$likersCount;
    }
    static function welcome(){
        echo 'Wellcome to social network!';
        //Никаких $this внутри статического метода!
    }
}

$user1 = new SocialLikes();

$user2 = new SocialLikes();


print ('Likers quantity: '. SocialLikes::$likersCount);
print (SocialLikes::welcome());


print ('Likers quantity: '. $user1::$likersCount);
print ($user1::welcome());
*/




// Ключевое слово instanceof

// deprecated функция is_a( object $object , string $class_name)
/*
class  Human  {}
$myBoss = new Human();

if($myBoss instanceOf Human)
    print('Мой  Босс  –  человек!');


class  Woman  extends  Human  {}
$woman  =  new  Woman();
if($woman   instanceOf  Human)
    print('Женшина тоже  –  человек!');



interface  LotsOfMoney  {}
class  ReachPeople  implements  LotsOfMoney  {}
$billGates  =  new  ReachPeople();
if($billGates  instanceOf  LotsOfMoney)
    print('У  Билла  Гейтса  много  денег!');
*/



// Функция __autoload()

/*
function __autoload($cl_name){
    print('Попытка создать объект класса '.$cl_name);
    include $cl_name.'.php';
}

$obj = new undefinedClass();
*/



// Методы доступа к свойствам объекта

/*
class  MyClass {
    private $properties;

    function __get($name){
        print("Чтение значения свойства $name");
        return $this->properties[$name];
    }

    function __set($name,$value){
        print("Задание нового свойства $name = $value");
        $this->properties[$name] = $value;
    }

}

$obj = new MyClass;
$obj->property  =  1;
$a = $obj->property;
*/


/*
class MyClass {
    private $_name;
    private $_age;

    function __set($name,$value){
        switch($name){
            case "name":
                $this->_name = $value;
            case "age":
                $this->_age = $value;
            default:
                echo "ERROR!!!";
        }
    }
    function __get($name){
        switch($name){
            case "name":
                return $this->_name;
            case "age":
                return $this->_age;
            default:
                echo "ERROR!!!";
        }
    }
}
*/





