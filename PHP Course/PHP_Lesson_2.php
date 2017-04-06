<?php
// PHP Lesson 2

// Пользовательские функции

// Описание функции:
/*function sayHello(){
    echo "Hello, world!";
    $p = 456;
}*/

// Вызов функции:
//sayHello();


// Повторная декларация функции с таким же именем вызовет ошибку
/*
function sayHello(){
    echo "Hello, world!";
}
*/

// Проверка
/*
if(!function_exists("sayHello")){
    function sayHello(){
        echo "Hello, world!";
    }
}
*/


// Аргументы

/*
function sayHello($name){
    echo "Hello, $name!", "<hr>";
}
*/

// Вызываем функцию, вариант 1
// sayHello("Иван");

// Вызываем функцию, вариант 2
/*
$name = "Петр";
sayHello($name);
*/

// Вызываем функцию, вариант 3
/*
$func = "sayHello";
$func("Игорь");
*/


// Аргументы по умолчанию
/*
function sayHello($name = "Гость"){
    echo "Hello, $name!", "<hr>";
}
sayHello();
sayHello("Игорь");
*/

/*
function sayHello($name, $last_name = "Петров", $phone = "000"){
    echo "Hello, $name!", "<hr>";
    echo "Last name, $last_name!", "<hr>";
    echo "Phone, $phone", "<hr>";
}
*/

//sayHello("Иван");
//sayHello("Иван","Сидоров");



// Области видимости
/*
$a = 1; // глобальная область видимости
function Test() {
    echo $a; // локальная область видимости
}
Test();
*/



// Работа с глобальными переменными

/*
$a = 1; // глобальная область видимости
$b = 3;
*/
/*
function Test(){
     global $a, $b; // до PHP 7
    // global ${a}, ${b}; // PHP 7
    echo $a+$b; // локальная область видимости
}
*/
/*
function Test(){
    echo $GLOBALS['a']+$GLOBALS['b']; // локальная область видимости
}
*/
// Test();



//  Cтатические переменные

/*
function Test(){
    static $a = 0;
    echo $a++;
}
Test(); //0
Test(); //1
Test(); //2
Test(); //3
*/


// возврат значений
/*
function getSum($num1, $num2){
    return $num1 + $num2;
}
$result = getSum(10, 435);
echo $result;
*/


// Передача аргумента по ссылке
/*
function foo(&$var){
    $var++;
    return $var;
}
$a = 5;
echo foo($a);
echo "<br>$a";
*/
// По ссылке можно передавать:
// переменные
// оператор new (new foo())
// ссылки возвращаемые функцией


// Рекурсивный вызов функций
/*
function factorial($n) {
    if ($n == 0) return 1;
    return $n * factorial($n-1);
}
$result = factorial(5);
echo "5! = " . $result;
*/


// PHP - встроенные функции

// Функции для работы с переменными
// is_array(expression)
// is_bool(expression)
// is_float(expression)
// is_integer(expression)
// is_numeric(expression)
// is_string(expression)
// is_null(expression)
// intval(expression [, int base])
// floatval(expression)


// Математические функции
// max – Возвращает наибольшее число из заданых.
// acos – Возвращает значение арккосинусазначения.
// cos – Возвращает косинус числа в радианах.
// min – Возвращает наименьшее число из заданых.
// decbin – Возвращает двоичное представление целого числа.
// log - Возвращает натуральный логарифм значения.
// pi – Возвращает приблизительное число пи.
// rad2deg – Возвращает в градусах значение аргумента заданного в радианах.
// round – Возвращает округленное до ближайшего
// целого числа значение заданное аргументом.
// sqrt – Извлечение квадратного корня из числа.
// rand – Возвращает число, лежащее между двумя необязательными аргументами включительно.

// Функции обработки строк
// addslashes()  // Экранирует спецсимволы в строке.
// echo addslashes("Hello, \\$ world!");

// stripslashes  // Разэкранирует спецсимволы в строке.
// echo stripslashes("Hello, \\$ world!");

// explode // Разбивает строку на массив из подстрок
// print_r(explode(',',"Hello, \\$ world!"));


// htmlentities  // Преобразует символы в соответствующие HTML сущности. (&nbsp; &lt; ...)
// trim  // Удаляет пробелы из начала и конца строки.

/*echo "<pre>";
echo "  Hello, \\$ world! ";
echo "<br>";
print_r(trim(" Hello, \\$ world! "));
echo "</pre>";*/

// str_replace  // Заменяет строку поиска на строку замены.
/*
$str = "Hello, world!";
$str = str_replace('world', 'John', $str);
echo $str;
*/

// strip_tags // Удаляет HTML и PHP тэги из строки.
// echo strip_tags("<h1>Hello</h1>");
// strlen // Возвращает длину строки.
//echo strlen("Hello, world!");

//strpos // Возвращает позицию первого вхождения подстроки.
// echo strpos( "Hello, world!" , 'wor' );
// echo strpos("Привет, мир!", 'ми' );
// echo mb_strpos("Привет, мир!", 'ми' );  // для многобайтовых кодировок

// strstr // Находит первое вхождение подстроки
// substr // Возвращает подстроку
// echo mb_substr( "Привет мир!", 7, 2 );


$transport = array('foot', 'bike', 'car', 'plane');
// Функции для работы с массивами
// array_pop
// array_shift
// array_rand
// array_reverse
// count
// in_array // in_array('foot',$transport)
// array_key_exists // array_key_exists (2, $transport)
// implode // implode(',', $transport)


// Работа с внутренним указателем массива
// current
// next
// prev
// end
// reset
// each() //Deprecated, с PHP 7.2.0 ее использование крайне не рекомендовано


print_r(current($transport));
echo "<br>";
next($transport);
next($transport);
print_r(current($transport));
prev($transport);
echo "<br>";
print_r(current($transport));
end($transport);
echo "<br>";
print_r(current($transport));
reset($transport);
echo "<br>";
print_r(current($transport));
echo "<br>";
print_r($transport);


// Функции даты и времени
// The Unix Epoch start - 01.01.1970, 00:00:00 GMT)


// strtotime('next year'); - Преобразует текстовое представление даты на английском языке в метку времени Unix (timestamp)
// echo strtotime('next year');
// echo strtotime('1995-12-03');

// $today = getdate();- Возвращает информацию о дате/времени по timestamp
/*
$today["seconds"] //Секунды От 0 до 59
"minutes" // Минуты От 0 до 59
"hours" // Часы От 0 до 23
"mday" // Порядковый номер дня месяца От 1 до 31
"wday" // Порядковый номер дня. 0 (воскресенье)
"mon" // Порядковый номер месяца От 1 до 12
"year" // Порядковый номер года, 4 цифры
"yday" // Порядковый номер дня в году От 0 до 365
"weekday" // Полное наименование дня недели От Sunday до Saturday
"month" // Полное наименование месяца, От January до December
0 // Временная отметка
*/
$day = getdate(strtotime('+2 day'));


// time() - Возвращает текущую метку времени Unix
// print_r(time());

// формат дат
/*
Коды формата дат(выборочно)
d // День месяца, 2 цифры с ведущими нулями от 01
D // Наименование дня недели, 3 символа от Mon
F // Полное наименование месяца, например January
G // Часы в 24-часовом формате без ведущих нулей От 0
H // Часы в 24-часовом формате с ведущими нулями
i // Минуты с ведущими нулями
j // День месяца без ведущих нулей От 1
l // Полное наименование дня недели, например Sunday
m // Порядковый номер месяца с ведущими нулями От 01
M // Наименование месяца, 3 символа От Jan до Dec
n // Порядковый номер месяца без ведущих нулей От 1
r // Дата в формате: Thu, 21 Dec 2000 16:01:07 +0200
s // Секунды с ведущими нулями От 00 до 59
w // Порядковый номер дня недели От 0 (воскресенье)
W // Порядковый номер недели года
Y // Порядковый номер года, 4 цифры
z // Порядковый номер дня в году (нумерация с 0)
*/
// echo date('H:I A l F dS, Y');


// Предопределенные константы
// __LINE__
// __FILE__
// __FUNCTION__

function showConst(){
    echo "<br>","Line: ",__LINE__, "<br>";
    echo "File: ",__FILE__,"<br>";
    echo "Function: ",__FUNCTION__;
}
showConst();


// PHP_EXTENSION_DIR     - Путь к директории с установленным PHP
// PHP_OS                - Ядро операционной системы
// PHP_VERSION           - Версия PHP
// PHP_CONFIG_FILE_PATH  - Путь к - php.ini
// phpinfo(); - Выводит информацию о текущей конфигурации PHP



