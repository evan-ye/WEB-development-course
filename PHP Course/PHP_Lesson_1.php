<?php
// Немного истории
// 1994 PHP/FI  // Personal Homepages Tools PHP/FI
// 1997 PHP 3.0 // Hypertext Preprocessor
// 1999 PHP 4.0 // Zend Engine
// 2004 PHP 5
// 2006 - 2010 PHP 6 = PHP 5.4
// 2015 PHP 7
?>


<?php
// Рекомендуется к использованию
// код РНР
?>


<?
// short tags Для этого тэга параметр
// "short_open_tag" в php.ini должен быть "on"
// код РНР

// Могут быть проблемы с распознаванием XML, поскольку синтаксис xml
// выглядит так <?xml version="1.0" encoding="UTF-8"...
?>

<?php
// ASP tags
// <%, %> // Deprecated, удален в PHP 7
// <script language="php"></script> // Deprecated, удален в PHP 7
?>


<?php
// Особенности PHP

// Каждая инструкция заканчивается точкой с запятой:
// echo "Hello world !";

// Одну инструкцию можно записывать в несколько строк:
echo
"Hello world !";

// Комментарии

// Это однострочный клмментарий

/* Это моногострочный комментарий
phpinfo();
*/

// Вывод данных (PHP => Сервер => Браузер)
echo "Hello world !";
print ("Hello world !"); // Returns 1  == print "Hello world !";

echo "<h1>","Просто текст","</h1>"; // Только для echo!

?>

<h1><?= "Просто текст" ?></h1> <?php // То же самое что echo
// Тег '<?=' с версии 5.4.0 доступен всегда, не эависомо от настройки "short_open_tag" в php.ini



// Переменные

// $Count; $count; $COUNT; $cOuNt; //Разные переменные


// Примеры допустимых имен переменных
//$i
//$_1
//$_myVar
//$firstName
//$x525_676


// Примеры недопустимых имен переменных
//$1
//$7Lucky
//$~password
//$Last!Visit
//$my-var


// Присвоение значения переменной и ее удаление
/* $foo = 'Bob';
$bar = 2 + 2;
$tmp = $foo;
echo $foo; */

// unset($foo); //Удаляем переменную $foo
// echo $foo; // Не выведет ничего


// Типы

// boolean
// integer
// float
// string
// array
// object
// resourse
// NULL


// boolean
// TRUE и FALSE – регистро-независимы.

// При преобразовании в логический тип, следующие значения рассматриваются как FALSE:
// 0
// 0.0
// "" или "0"
// []
// NULL



// integer и float

// Integer
// $int = 1234; // десятичное число
// $int = -123; // отрицательное число
// $int = 0123; // восьмеричное число
// $int = 0x1A; // шестнадцатеричное число


// Числа с плавающей точкой (вещественные)
//$flt = 1.234;
//$flt = 1.2e3;
//$flt = 7E-10;


// string (двойные кавычки)
// \n новая строка
// \r возврат каретки
// \t горизонтальная табуляция
// \ обратная косая черта
// \$ знак доллара
// \" двойная кавычка

//echo 'Это не вставит \n новую строку $foo';
//echo "\n Это вставит \n новую строку $foo";

// \n и \r = это маркеры концов строк в разных ОС
// \r\n - dos & windows


//  string (heredoc)
/*
$str = <<< LABEL
$foo Пример строки,
охватывающей несколько строчек, с использованием heredoc-синтаксиса. Это очень похоже на использование HTML-тэга <PRE>.
И переменные сюда тоже можно подставлять, а также использовать специальные символы.
LABEL;

echo $str;
*/


// NULL

//Переменная считается NULL если:
// - ей была присвоена константа NULL.
// - ей еще не было присвоено какое-либо значение.
// - она была удалена с помощью unset().
//

//$a = null;
//echo $a;


// Экранирование переменных
$beer = 'Heineken';
// echo "$beer's taste is great"; // Вывод работает
// echo "He drank some $beers"; // Ошибка
// echo "He drank some ${beer}s"; // Работает, переменная экранирована
// echo "He drank some {$beer}s"; // Работает, переменная экранирована


// Доступ к символу в строке

// Получение первого символа строки
// $first = $beer{0}; // H

// Получение последнего символа строки
/*
 * $len = strlen($beer);
$last = $beer{$len-1};
echo $last; // n
*/


// Операторы: арифметические
/*
$a + $b // Сумма $a и $b
$a - $b // Разность $a и $b
$a * $b // Произведение $a и $b
$a / $b // Частное от деления $a на $b
$a % $b // Целочисленный остаток от деления $a на $b
5/2 равно 2.5, но 5%2 равно 1
$a += $b // Тоже, что и $a = $a + $b.
Остальные операторы работают аналогично.
*/

// Операторы: строковые
/*
$a = "Hello ";
$b = $a . "World!";
$b = "World!";
*/
//print $a . " " . $b;
// echo $a, " ", $b;


// Полезные функции

// isset()
/*
if (isset($beers)) {
    echo $beers;
}

if (isset($beer)) {
    echo $beer;
}
*/

// empty()
/*
if (!empty($beer)) {
    echo $beer;
}
*/


// if

$foo= 'test';

// I вариант синтаксиса
/*
if(!empty($foo))
    echo $foo;
*/


// II вариант синтаксиса
/*
if(!empty($foo)) {
    echo $foo;
} else {
    echo '$fooo is undefined';
}
*/

// III вариант синтаксиса
/*
if(!empty($foo)):
    echo $foo;
elseif(!empty($bar)):
    echo $bar;
else:
    echo 'nothing';
endif;
*/

?>

<?php if(!empty($foo)): ?>

    <h1><?php print $foo; ?></h1>

<?php else: ?>

    <h1>not found</h1>

<?php endif ?>


<?php
/*
// Операторы: сравнения
$a == $b // TRUE если $a равно $b.
$a === $b // TRUE если $a равно $b И имеет тот же тип
$a != $b // TRUE если $a не равно $b.
$a !== $b // TRUE если $a не равно $b ИЛИ вслучае, если они разных типов.
$a < $b // TRUE если $a строго меньше $b.
$a > $b // TRUE если $a строго больше $b.
$a <= $b // TRUE если $a меньше или равно $b.
$a >= $b // TRUE если $a больше или равно $b.


// Операторы: логические
$a and $b // TRUE если и $a, и $b TRUE.
$a or $b // TRUE если или $a, или $b TRUE.
!$a // TRUE если $a не TRUE.
$a && $b // TRUE если и $a, и $b TRUE.
$a || $b // TRUE если или $a, или $b TRUE.


// Приоритеты
$a and ($b and $c) = $a and $b && $c
$a and ($b or $c) = $a and $b || $c
// http://php.net/manual/ru/language.operators.precedence.php
*/



// Новые операторы в PHP 7

// Null-коалесцентный оператор

// До PHP 7:
/*
if (isset($foo)) {
    $bar = $foo;
}
elseif (isset($foo2)){
    $bar = $foo2;
}
else {
    $bar = 'default'; // присваиваем $bar значение 'default' если $foo равен NULL
}
*/

// В теперь можно так PHP 7:
// $bar = $foo ?? $foo2 ?? 'default';


// Оператор "spaceship" (космический корабль) <=>
/*
switch ($bar <=> $foo) {
    case 0:
        echo '$bar и $foo равны';
    case -1:
        echo '$foo больше';
    case 1:
        echo '$bar больше';
}
*/
// Сравниваемые значения могут иметь тип integer, float, string и даже быть массивами


// Array (массив) индексированный

/*
$user =array("John", "root", "p@ssw0rd");
$user = ["John", "root", "p@ssw0rd"];
*/

/*
$user[]= "John"; //индекс 0
$user[]= "root"; //индекс 1
$user[]= "p@ssw0rd"; //индекс 2
*/

/*
$user[0]= "John"; //индекс 0
$user[1]= "root"; //индекс 1
$user[2]= "p@ssw0rd"; //индекс 2
$user[] = "312-34-85"; // имеет индекс 3
*/


// Вывод содержимого массива на печать
/*
echo "<pre>";
    print_r($user);
echo "</pre>";
*/

//var_dump($user);


// Подсчет количества элементов в массиве - count();
//$cnt = count($user);
//echo "$cnt элементов массиве";



// Array (массив): ассоциативный

/*
$user["name"]= "John";
$user["login"]= "root";
$user["password"]= "p@ssw0rd";
$user[] = "312-34-85";
*/


/*
echo "<pre>";
    print_r($user);
echo "</pre>";
*/


// Доступ к элементам массива
// echo $user[0];
// echo $user["name"];


// Array (массив): многомерный
/*
$users = array(
    0 => array(
        "login" => "Administrator",
        "password" => "h734yuiw8"
    ),
    1 => array(
        "login" => "John",
        "password" => "78dfud776s"
    )
);
echo $users[0]["login"];
*/



// Константы

/*
define('PI', 3.14);
$index = 10 * PI;
echo $index;
*/

// PI = 10 * 3.14; // Ошибка!


// В PHP 7 появилось задание констант массивов
/*
define('ANIMALS', [
    'dog',
    'cat',
    'bird'
]);
echo ANIMALS[1];
*/



// Циклы

// Операторы: инкремента и декремента
// ++ Увеличивает значение переменной на единицу
// -- Уменьшает значение переменной на единицу

// PRE инкремент/декремент
// ++$a Увеличивает $a на единицу и возвращает значение $a.
// --$a Уменьшает $a на единицу ивозвращает значение $a.

// POST инкремент/декремент
// $a++ Возвращает значение $a, а затем увеличивает $a на единицу.
// $a-- Возвращает значение $a, а затем уменьшает $a на единицу.


// Циклы: for
/*
$sum = 1;
for ($i=1; $i<=30; $i++){
    $sum += 3;
    print($sum);
}
*/


// Циклы: while
/*
$sum = 1;
while ($i<=30){
    $sum += 3;
    $i++;
    print($sum);
}
*/


// Циклы: do… while
/*
$i = 1;
$sum = 1;
do {
    $sum += 3;
    $i++;
    print($sum);
} while($i<=30);
*/



// Цикл: foreach (короткий)

// $user = ["John", "root", "p@ssw0rd"];
/*
foreach ($array as $value){
    // Инструкция;
}
*/

/*
foreach ($user as $value){
    print($value . '<br>');
}
*/


// Цикл: foreach (длиный)

/*
foreach ($array as $key => $value){
    Инструкция;
}
*/

/*
foreach ($user as $key=>$value){
    print('['. $key .']=> ' .$value . '<br>');
}
*/

// В PHP7 итерация по массиву при помощи foreach() больше не сдвигает внутренний указатель массива,
// который можно получать и изменять при помощи функций current() / next() / reset() и им подобных.
// Так же foreach по значению теперь всегда работает с копией массива.




// Пользовательские функции

// Описание функции:
function sayHello(){
    echo "Hello, world!";
}

// Вызов функции:
sayHello();

// Повторная декларация функции с таким же именем вызовет ошибку
/*
function sayHello(){
    echo "Hello, world!";
}
*/


// Проверить существует ли функция можно так function_exists() :
if(!function_exists("sayHello")) {
    function sayHello(){
        echo "Hello, world!";
    }
}









