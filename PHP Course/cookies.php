<?php

// Cookie: первый запрос страницы


// GET /folder/index.php?name=John HTTP/1.1
// Host:  www.example.com
// Accept:  */*
// Accept-Language:  ru
// Referrer:  http://google.com/search?q=keyword
// User-Agent:  Mozilla  4.0  (compatible;  MSIE  6.1,…)


//HTTP/1.1 200 OK
// Server: Microsoft IIS 6
// Content-Type: text/html
// Content-Length: 16345
// Last-Modified: Sun, 03 Jul 2005 18:00:00 GMT
// Set-Cookie: userName=Vasya



// Cookie: другие запросы страниц


// GET /folder/index.php HTTP/1.1
// Host:  www.example.com
// Accept:  */*
// Accept-Language:  ru
// Referrer:  http://google.com/search?q=keyword
// User-Agent:  Mozilla  4.0  (compatible;  MSIE  6.1,…)
// Cookie: userName=Vasya


// Работа с cookie

// int setcookie (string name [, string value [, int expire [, string path [, string domain [, int secure]]]]]);


// $value = 'test value';

// Создание сессионной cookie
// setcookie ("TestCookie", $value,


// Создание постоянной cookie на 2 минуты
// setcookie ("TestCookie", $value, time()+120);


// Cookie: чтение
//echo $_COOKIE["TestCookie"];



// Cookie: массивы и cookie

$array = array(
    "name"=>"John",
    "login"=>"root",
    "pass"=>"p@ssw0rd");

// Упаковываем массив в строку
// $str = serialize($array);

// Сохраняем массив в cookie
// setcookie('user',$str, time() + 120);

// Считываем строку и переводим в массив
// $array = unserialize($_COOKIE['user']);

// print_r($array);



// Cookie: удаление
// setcookie("TestCookie"); // - официальный способ удаления
// setcookie("TestCookie", ""); // - запись в Cookie пустого значения
// setcookie ("TestCookie", "", time() - 3600); // - перевод времени действия назад

