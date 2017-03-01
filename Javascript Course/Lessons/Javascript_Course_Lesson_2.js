// Javascript Course. Lesson 2


// Чтобы избежать случайный вывод конструктора без слова 'new' можно сделать следующее:
function Human(name) { 
  if(! (this instanceof Human) ) {
    return new Human(name);
  }
  this.name = name;
}


Human.prototype.say = function(what) { 
    console.log(this.name + ": " + what); 
}

var alex = new Human("Alex");

//Замена контекста
var jack = new Human("Jack");

alex.say.apply(jack, ["hello"]); // "Jack: hi"
alex.say.call(jack,"hi"); // "Jack: hi"


function object(o) { 
  function F() {} 
  F.prototype = o;  
  return new F(); 
}

var parent = { a : 1 };
var child = object(parent);
child.a //1


var parent = {name : 'Alex'};
var child = Object.create(parent);
child //returns {} but
child.name // returns 'Alex'


// Массивы

//Создание массива

//Рекомендуемый способ создания массива
var myArray = [];
var cities = ['Moscow', 'Almaty', 'Kiev', 'London', 'Ottawa'];

//Создание массива с помощью конструктура
var a = new Array();
var b = new Array('Hey', 'You', 'Me');
var c = new Array(3, 5);

// length
var a = ['a', 'b', 'c'];
a[0]; //a
a[3]; // undefined
a[10] ='what?';
a['test'];

a.length = 2;



// Многомерные массивы
var arr = [1, 'b', 'string', {a, b, c}, [a, b, c]];
arr[4][1];



// Методы массива
//delete - удаление элемента.
delete a[1];


// splice - удаление элементом со "сдвигом'' последующих элементов
var cities = ['Moscow', 'Almaty', 'Kiev', 'London', 'Ottawa'];
cities.splice( 1, 2 );
cities //  [ 'Moscow', 'London', 'Ottawa' ]


arrrrr = [5, ,'string', 20];
for (var i=0; i < arrrrr.length; i++) {
  console.log(arrrrr[i]); // 5, undefined, string, 20
}

for (var x in arrrrr) {
  console.log(arrrrr[x]); // 5, string, 20
}

// reduce
function adder(a, b) { return a + b }
ccc = [9, 2, 5, 6, 7]
ccc.reduce(adder, 0); //29

// concat
bbb = [1,2];
d = ccc.concat(bbb, 'end');

// push
bbb.push(8);
bbb; //[ 1, 2, 8 ]

//pop
bbb.pop();

// join
ccc.join('-'); //'9-2-5-6-7'

// sort
var hey = [1, 12, 5, 87, 32, 19];
hey.sort();
function compare(a, b) { return a-b; }
hey.sort(compare); // [ 1, 5, 12, 19, 32, 87 ]

// reverse
hey.reverse(); // [ 87, 32, 19, 12, 5, 1 ]


// Ассоциативный массив
hey['index'] = 'index value';


// Регулярные выражения

// Quick-Start: Regex Cheat Sheet
// http://www.rexegg.com/regex-quickstart.html


// Interactive Tutorial
// https://regexone.com
















