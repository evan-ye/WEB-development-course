<pre>
<?php

// Reflection API


// Класс ReflectionFunctionAbstract
/*
int getStartLine ( ) // получает номер строки кода в котором начинается описание данной функции
int getEndLine ( ) // получает номер строки кода в котором заканчивается описание данной функции
string getExtensionName ( ) // получить название расширения если функция описана в расширении
string getFileName ( )
string getName ( ) // получить имя функции
int getNumberOfParameters ( ) // получить аргументы функции
int getNumberOfRequiredParameters ( ) // получить обязательные аргументы функции (у которых нет хзначения по умолчанию)
array getParameters ( ) // получить массив параметров
array getStaticVariables ( ) // получить статические свойства
bool isInternal ( ) // проверить встроенная ли функция
bool isUserDefined ( ) // проверить пользовательская ли функция
ReflectionExtension getExtension ( )
string getNamespaceName ( )
bool isClosure ( ) // является ли функция замыканием
bool isDeprecated ( )
string getDocComment ( )
abstract void __toString ( )
*/


// Класс ReflectionFunction
/*
Константы
  int IS_DEPRECATE
Свойства
  public $name // перегруженное свойство name
Методы
    abstract void __toString ( )
    static string export ( string $name [, string $return ] ) // вывод содкржимого функции
    mixed invoke ([ mixed $parameter [, mixed $... ]] ) // метод для исполнения функции
    string __toString (
*/
/*
function sayHello($name, $h){
    static $count = 0;
    return "<h$h>Hello, $name</h$h>";
}*/


// Получить обзор функции - создает объект класса и экспортирует его
// Reflection::export(new ReflectionFunction('sayHello'));


/*
// Создание экземпляра класса ReflectionFunction
$func = new ReflectionFunction('sayHello');

// Вывод основной информации
printf( // форматированный принт
    "<p>===> %s функция '%s'\n".
    " объявлена в %s\n".
    " строки с %d по %d\n",
    $func->isInternal() ? 'Internal' : 'User-defined',
    $func->getName(),
    $func->getFileName(),
    $func->getStartLine(),
    $func->getEndline()
);

// Вывод статических переменных, если они есть
if ($statics = $func->getStaticVariables()){
    printf("<p>---> Статическая переменная: %s\n", var_export($statics,1));
}


// Вызов функции
printf("<p>---> Результат вызова: ");
$result = $func->invoke("John","1");
echo $result;

*/



// Класс ReflectionParameter

/*
Свойства
  public $name
Методы
    bool allowsNull( ) // проверить допускает ли параметро передачу null. По умолчанию все параметры это допускаю если у параметра не указан type hint
    __construct ( string $function , string $parameter )
    ReflectionFunction getDeclaringFunction ( )
    mixed getDefaultValue ( ) // получить значение по умолчанию
    string getName ( ) // получить позицию параметра в параметрах
    int getPosition ( )
    bool isArray ( )
    bool isDefaultValueAvailable ( )
    bool isOptional ( )
    bool isPassedByReference ( ) // перадется ли он по ссылке
*/

/*
function foo1($a, $b, $c) { }
function foo2(Exception $a, &$b, $c) { }
function foo3(ReflectionFunction $a, $b = 1, $c = null) { }
function foo4() { }

// Создание экземпляра класса ReflectionFunction
$reflect = new ReflectionFunction("foo1"); // 'foo2', 'foo3', 'foo4'

//echo $reflect;

foreach ($reflect->getParameters() as $i => $param) {
    printf(
        "-- Параметр #%d: %s {\n".
        " Допускать NULL: %s\n".
        " Передан по ссылке: %s\n".
        " Обязательный?: %s\n".
        "}\n",
        $i,
        $param->getName(),
        var_export($param->allowsNull(), 1),
        var_export($param->isPassedByReference(), 1),
        $param->isOptional() ? 'нет' : 'да'
    );
}*/


// Класс ReflectionClass
/*
Свойства
    public $name
Методы
    __construct ( mixed $argument )
    mixed getConstant ( string $name ) // передается имя константы и возвращает ее значение
    array getConstants ( ) // массив констант
    array getDefaultProperties ( )
    string getDocComment ( )
    int getStartLine ( )
    int getEndLine ( )
    ReflectionExtension getExtension ( )
    string getExtensionName ( )
    string getFileName ( )
    array getInterfaceNames ( ) // получить массив интерфейсов (объектов)
    array getInterfaces ( )
    object getMethod ( string $name ) // получить объект класса ReflectionMethod
    array getMethods ( ) // получить массив методов
    string getName ( )
    string getNamespaceName ( )
    object getParentClass ( )
    array getProperties ( )
    ReflectionProperty getProperty ( string $name )
    array getStaticProperties ( )
    mixed getStaticPropertyValue ( string $name [, string $default ] )
    bool hasConstant ( string $name )
    bool hasMethod ( string $name )
    bool hasProperty ( string $name )
    bool implementsInterface ( string $interface )
    bool isAbstract ( )
    bool isFinal ( )
    bool isInstance ( object $object )
    bool isInstantiable ( ) // можно ли создавать объект на основе этого класса
    bool isInterface ( )
    bool isInternal ( )
    bool isUserDefined ( )
    object newInstance ( mixed $args [, mixed $... ] ) // создает объект - экземпляр класса
    void setStaticPropertyValue ( string $name , string $value )
    string __toString ( )
*/
/*
abstract class MyClass{
    public $a = 1;
    protected $b = 2;
    private $c = 3;
    public static $cnt = 0;
    const HANDS = 2;
    abstract function foo();
    public static function bar(){
        //Что-то делаем
    }
    public function sayHello($name, $h="1"){
        static $count = 0;
        return "<h$h>Hello, $name</h$h>";
    }
}*/

// Обзор пользовательского класса
// Reflection::export(new ReflectionClass('MyClass'));


// Обзор встроенного класса
//Reflection::export(new ReflectionClass('Exception'));



interface MyInterface{}

class Object{}

class Counter extends Object implements MyInterface{
    const START = 0;
    private static $c = Counter::START;

    public function count() {
        return self::$c++;
    }
}

// Создание экземпляра класса ReflectionClass
$class = new ReflectionClass('Counter');

// Вывод основной информации
/*
printf(
    "===> %s%s%s %s '%s' [экземпляр класса %s]\n" .
    " объявлен в %s\n" .
    " строки с %d по %d\n",
    $class->isInternal() ? 'Встроенный' : 'Пользовательский',
    $class->isAbstract() ? ' абстрактный' : '',
    $class->isFinal() ? ' финальный' : '',
    $class->isInterface() ? 'интерфейс' : 'класс',
    $class->getName(),
    var_export($class->getParentClass(), 1),
    $class->getFileName(),
    $class->getStartLine(),
    $class->getEndline()
);*/


// Вывод тех интерфейсов, которые реализует этот класс
printf("---> Интерфейсы:\n %s\n", var_export($class->getInterfaces(), 1));


// Вывод констант класса
printf("---> Константы: %s\n", var_export($class->getConstants(), 1));

// Вывод свойств класса
printf("---> Свойства: %s\n", var_export($class->getProperties(), 1));


// Вывод методов класса
printf("---> Методы: %s\n", var_export($class->getMethods(), 1));


// Если есть возможность создать экземпляр класса, то создаем его
if ($class->isInstantiable()) {
    $counter = $class->newInstance();

    echo '---> Создан ли экземпляр класса '.$class->getName().'? ';
    echo $class->isInstance($counter) ? 'Да' : 'Нет';

    echo "\n---> Создан ли экземпляр класса Object()? ";
    echo $class->isInstance(new Object()) ? 'Да' : 'Нет';
}








?>
</pre>
