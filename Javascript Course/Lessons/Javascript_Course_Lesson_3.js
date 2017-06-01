// Javascript Course. Lesson 3


// Регулярные выражения

// Quick-Start: Regex Cheat Sheet
// http://www.rexegg.com/regex-quickstart.html


// Interactive Tutorial
// https://regexone.com

//Среда для тестирования
//https://regex101.com/
//http://www.regexpal.com/


//Применение  в Javascript
new RegExp('\\w+c', "igm"); 

var re = /\w+c/igm;


// Методы
// RegExp - test Есть ли совпадение в строке | true / false
// RegExp - exec Поиск совпадений в строке | массив / null
// String - search Поиск совпадений в строке | индекс совпадения / -1
// String - match Поиск совпадений в строке | массив / null
// String - replace Поиск совпадений и замена | строка
// String - split Разбиение строки на массив подстрок массив


//test
var reg = /^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/; // любой email
reg.test("dfdfd") // false
reg.test("dfdfd@dfdgfd") // false
reg.test("dfdfd@dfdgfd.sfdfgddgwew") //false
reg.test("test@example.com") // true


// exec
var reg = /\d/g; // поиск цифры глобально
var input = "fsfdsds8sd9dsfds##$sdD";
// reg.exec(input)
// reg.exec(input)
var arr; //Создали пустой массив
while ( (arr = reg.exec(input)) != null ) {
 console.log(arr[0]); // выводим первый элемент массива arr
}


//search
"asdffdRf3454352454Dsdcg;343w$#%s2234s".search(/\d{2,8}/)


//match
"asdffdRf3454352454Dsdcg;343w$#%s2234s".match(/\d{2,8}/) 


//replace
var str = "Apple thinks different because apple is different";
str.replace("Apple", "Google");
str.replace(/apple/ig, "Google");

'Klim Trakht'.replace(/(\w+)\s(\w+)/, 'my name is $2, $1');

function rep(symbol){
   return "+" +symbol.toUpperCase();
 }

"DFDERERFdfffSFDFFfdfFvbFeRgfhgdfg".replace(/[a-z]/g, rep);


//split

"Apple thinks different because apple is different".split(/apple/i); // [ '', ' thinks different because ', ' is different' ]




// Заключение

'0' == ''           //false
0 == ''             //true
false == 'false'    //false
false == '0'        //true

false == undefined  //false
false == null       //false
null == undefined   // true


var a = new String('test');
var b = 'test';
var c = new String('test');
a == b //true
c == b //true
a == c //false


// Объявлять переменные всегда лучше с var
//var x = 10;
//x = 10;

var h =1;

function test() {
  h = 10;
  return h;
}

h // вернет 1
this.h // вернет 1


function test() {
  var h = 10;
  return h;
}
test() //вернет 10 и не повлияет на глобальный h

// let ES6


// Не используйте eval

//eval(' var h = 10 ');
var x = 1;

//Обычное использование
// function test () {
//   var x = 1;
//   eval('x=3');
//   return x;
// }

//Такое использование позволяет запускать eval в глобальном объекте
function test () {
 var x = 1;
 var evil = eval;
 evil('x=3');
 return x;
}

// Преобразование булевых значений в числа с помощью опреатора '+'
[]           // []
[]+[]        // '' - сложение двух массивов возвращает строку
'' == false  // true
!false       // true инвертация булевого значения
!''          // true
!([]+[])     // true

+true        // 1
+false       // 0
+[]          // 0
!+[]         // true
+!+[]        // 1
([]+![])     // 'false'

([]+![])[+!+[]] // 'a'

// Кодирование текста с помощью translate.js
//https://gist.github.com/mgechev/4188098


// Полезные ресурсы
//https://developer.mozilla.org/ru/docs/Web/JavaScript
//https://github.com/airbnb/javascript – рекомендации по стилю
//http://bonsaiden.github.io/JavaScript-Garden/#intro





