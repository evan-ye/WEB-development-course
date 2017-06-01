<?php

echo "<pre>";
// Standard PHP Library
// Классы
  // Closure
  // Generator
// Интерфейсы
  // Traversable
  // Iterator
  // IteratorAggregate
  // ArrayAccess
  // Serializable


// Интерфейс Traversable
// Этот интерфейс не имеет методов, его единственная цель - быть базовым интерфейсом для всех обходимых классов.




// Создание итератора из массива

/*
ArrayIterator implements Iterator,
       Traversable,
       ArrayAccess,
       SeekableIterator,
       Countable,
       Serializable
*/
/*
$it = new ArrayIterator( [3, 2, 1] );

foreach ($it as $value) {
    echo $value . " "; // 3 2 1
}

$it->rewind();
$it->asort();

foreach ($it as $value) {
    echo $value . " "; // 1 2 3
}


echo $it->count();

// Получаем массив из итератора
$array = iterator_to_array($it);


print_r($array);
*/



// Рекурсивная итерация

/*
RecursiveArrayIterator extends ArrayIterator implements RecursiveIterator

RecursiveIteratorIterator implements OuterIterator,
          Traversable,
          Iterator
*/

/*
$arr = [1, [2, [3]], [4]];

$rit = new RecursiveArrayIterator($arr);

$rii = new RecursiveIteratorIterator($rit);

foreach ($rii as $key => $value) {
    // Метод getDepth(); возвращает уровень вложенности
    $depth = $rii->getDepth();
    echo "depth=$depth key=$key value=$value\n";
    echo "<br />";
}

*/



// Фильтрация элементов

/*
abstract FilterIterator extends IteratorIterator
    implements OuterIterator,
    Traversable,
    Iterator
*/

/*
class MyClass extends FilterIterator {
    // Метод accept позволяет отфильтровать элементы
    public function accept() {
        return $this->getInnerIterator()->current() > 5;
    }
}

$arr = [5, 2, 7, 1, 9, 3, 6, 8];

$it = new ArrayIterator($arr);
$fit = new MyClass($it);

foreach ($fit as $value) {
    echo $value . " ";
}
*/


// Ограничение итераций

/*
LimitIterator extends IteratorIterator implements OuterIterator,
              Traversable,
              Iterator
*/
/*
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$it = new ArrayIterator($arr);
$lit = new LimitIterator($it, 2, 4);

foreach ($lit as $value) {
    echo $value . " ";
}*/



// Объединение итераторов
/*
AppendIterator extends IteratorIterator implements OuterIterator,
                          Traversable,
                          Iterator
*/

/*
class MyObject {
    public function action() {
        // Что-то делаем
        $boolean = true;
        return $boolean;
    }
}


$object1 = new MyObject();
$object2 = new MyObject();
$arrayIterator1 = new ArrayIterator( [$object1, $object2] );


$object3 = new MyObject();
$object4 = new MyObject();
$arrayIterator2 = new ArrayIterator( [$object3, $object4] );


// Объединение итераторов
$arrayIterator = new AppendIterator();
$arrayIterator->append($arrayIterator1);
$arrayIterator->append($arrayIterator2);




// Бесконечная итерация
/*
InfiniteIterator extends IteratorIterator implements OuterIterator,
              Traversable,
              Iterator
*/
/*
$it = new InfiniteIterator($arrayIterator);
foreach ($it as $object){
    $r = $object->action();
    if(!$r) break;
}
*/



// Работа с файлами

// Позволяет получать параметры файла
// SPLFileInfo
/*
$fileInfo = new SPLFileInfo('../test.txt');
$fileProps = [];

$fileProps['filename'] = $fileInfo->getFilename();
$fileProps['pathname'] = $fileInfo->getPathname();
$fileProps['size'] = $fileInfo->getSize();
$fileProps['mtime'] = $fileInfo->getMTime();
$fileProps['type'] = $fileInfo->getType();
$fileProps['isWritable'] = $fileInfo->isWritable();
$fileProps['isReadable'] = $fileInfo->isReadable();
$fileProps['isExecutable'] = $fileInfo-> isExecutable();
$fileProps['isFile'] = $fileInfo->isFile();
$fileProps['isDir'] = $fileInfo->isDir();
var_export($fileProps);
*/


// Позволяет читать файл построчно
/*
SplFileObject extends SplFileInfo implements RecursiveIterator,
            Traversable,
            Iterator,
            SeekableIterator
*/
/*
echo "============\n";

$file = new SplFileObject('../test.txt');
foreach($file as $line) {
    echo "$line\n";
}
echo "============\n";


$file->rewind();
while($file->valid()){
    echo $file->current()."\n";
    $file->next();
}

echo "============\n";
$file->seek(3);
echo $file->current();
*/



// Работа с директориями
/*
DirectoryIterator extends SplFileInfo implements SeekableIterator,
             Traversable,
             Iterator
*/
// Итерация директорий
/*
foreach(new DirectoryIterator('.') as $fileInfo) {
    echo $fileInfo->getFileName() . "\n";
}
*/



// Рекурсивная итерация директорий
/*
function callback($objectName) {
    if($objectName->isDir()){
        echo "[$objectName]\n";
    } else {
        echo "$objectName\n";
    }
}
$rid = new RecursiveDirectoryIterator('../');
$rii = new RecursiveIteratorIterator($rid);
array_map('callback', iterator_to_array($rii));
*/


// Строим дерево
/*
RecursiveTreeIterator extends
RecursiveIteratorIterator implements OuterIterator
*/
/*
$rdi = new RecursiveDirectoryIterator('../');
$tree = new RecursiveTreeIterator($rdi);

$tree-> setPrefixPart(RecursiveTreeIterator::PREFIX_LEFT, "//");
$tree-> setPrefixPart(RecursiveTreeIterator::PREFIX_MID_HAS_NEXT, ":");
$tree-> setPrefixPart(RecursiveTreeIterator::PREFIX_END_HAS_NEXT, "[]");
$tree-> setPrefixPart(RecursiveTreeIterator::PREFIX_RIGHT, "||");


foreach ($tree as $item) {
    echo $item . "\n";
}

echo "</pre>";
*/



// GlobIterator
/*
GlobIterator extends FilesystemIterator implements SeekableIterator,
               Countable
*/
/*
$gi = new GlobIterator(__DIR__ .'/../*.php');
while($gi->valid()){
    echo $gi->key() . "\n";
    $gi->next();
}
*/



// Массив как объект

/*
ArrayObject implements IteratorAggregate, ArrayAccess,
            Traversable,
            Iterator,
            Countable
*/

/*
$usersArr = [
    'Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Майк', 'Даша', 'Наташа', 'Света'
];

$usersObj = new ArrayObject($usersArr);

// Добавляем новое значение
$usersObj->append('Ира');

//Получаем копию массива
$usersArrCopy = $usersObj->getArrayCopy();

// Проверяем, существует ли пятый элемент массива
if ($usersObj->offsetExists(4)){
    // Меняем значение пятого элемента массива
    $usersObj->offsetSet(4, "Игорь");
}

// Удаляем шестой элемент массива
$usersObj->offsetUnset(5);

// Получаем количество элементов массива
//echo $usersObj->count();

// Сортируем по алфавиту
$usersObj->natcasesort();


// Выводим данные массива
for($it = $usersObj->getIterator();
    $it->valid();
    $it->next()) {
    echo $it->key() . ': ' . $it->current() . "\n";
}



print_r($usersObj);*/


