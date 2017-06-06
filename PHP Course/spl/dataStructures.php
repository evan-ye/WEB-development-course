<?php
echo "<pre>";
// Структуры данных


// Хранилище

/*
SplObjectStorage implements ArrayAccess,
       Serializable,
       Traversable,
       Iterator,
       Countable
*/

/*
SplObjectStorage implements Countable , Iterator , Serializable , ArrayAccess {
    // Методы
 public void addAll ( SplObjectStorage $storage )
 public void attach ( object $object [, mixed $data = NULL ] )
 public bool contains ( object $object )
 public int count ( void )
 public object current ( void )
 public void detach ( object $object )
 public string getHash ( object $object )
 public mixed getInfo ( void )
 public int key ( void )
 public void next ( void )
 public bool offsetExists ( object $object )
 public mixed offsetGet ( object $object )
 public void offsetSet ( object $object [, mixed $data = NULL ] )
 public void offsetUnset ( object $object )
 public void removeAll ( SplObjectStorage $storage )
 public void removeAllExcept ( SplObjectStorage $storage )
 public void rewind ( void )
 public string serialize ( void )
 public void setInfo ( mixed $data )
 public void unserialize ( string $serialized )
 public bool valid ( void )
}
*/

/*
$storage = new SplObjectStorage();

$object1 = (object) ['param' => 'name'];
$object2 = (object) ['param' => 'numbers'];
$object3 = (object) ['param' => 'name'];

$storage[$object1] = "John";
$storage[$object2] = [1, 2, 3];

foreach($storage as $i => $key){
    echo "Item $i:\n";
    var_dump($key, $storage[$key]);
    echo "\n";
}
*/



// Стек LIFO

/*
SplDoublyLinkedList implements Iterator, Countable, ArrayAccess

SplStack extends SplDoublyLinkedList


SplStack extends SplDoublyLinkedList implements Iterator , ArrayAccess , Countable {
    // Методы
    __construct ( void )
 void setIteratorMode ( int $mode )
 // Наследуемые методы
 public void SplDoublyLinkedList::add ( mixed $index , mixed $newval )
 public mixed SplDoublyLinkedList::bottom ( void )
 public int SplDoublyLinkedList::count ( void )
 public mixed SplDoublyLinkedList::current ( void )
 public int SplDoublyLinkedList::getIteratorMode ( void )
 public bool SplDoublyLinkedList::isEmpty ( void )
 public mixed SplDoublyLinkedList::key ( void )
 public void SplDoublyLinkedList::next ( void )
 public bool SplDoublyLinkedList::offsetExists ( mixed $index )
 public mixed SplDoublyLinkedList::offsetGet ( mixed $index )
 public void SplDoublyLinkedList::offsetSet ( mixed $index , mixed $newval )
 public void SplDoublyLinkedList::offsetUnset ( mixed $index )
 public mixed SplDoublyLinkedList::pop ( void ) // Позволяет посмотреть какой элемент находится сверху
 public void SplDoublyLinkedList::prev ( void )
 public void SplDoublyLinkedList::push ( mixed $value ) // Добавляет значение в стек
 public void SplDoublyLinkedList::rewind ( void )
 public string SplDoublyLinkedList::serialize ( void )
 public void SplDoublyLinkedList::setIteratorMode ( int $mode )
 public mixed SplDoublyLinkedList::shift ( void )
 public mixed SplDoublyLinkedList::top ( void )
 public void SplDoublyLinkedList::unserialize ( string $serialized )
 public void SplDoublyLinkedList::unshift ( mixed $value )
 public bool SplDoublyLinkedList::valid ( void )
}*/

/*
$stack = new SplStack();
$stack->push("John");
$stack->push("Mike");

$stack->pop(); //Mike
$stack->pop(); //John

$stack->push("John");
$stack->push("Mike");
$stack->push("Josh");

$stack->top(); //Josh
$stack -> pop();
echo$stack -> bottom();
*/


// Очередь FIFO

/*
SplDoublyLinkedList implements Iterator, Countable, ArrayAccess

SplQueue extends SplDoublyLinkedList

SplQueue extends SplDoublyLinkedList implements Iterator , ArrayAccess , Countable {
    // Методы
    __construct ( void )
 mixed dequeue ( void ) // Извлекает задание
 void enqueue ( mixed $value ) // Добавляет задание
 void setIteratorMode ( int $mode )
 // Наследуемые методы
 public void SplDoublyLinkedList::add ( mixed $index , mixed $newval )
 public mixed SplDoublyLinkedList::bottom ( void )
 public int SplDoublyLinkedList::count ( void )
 public mixed SplDoublyLinkedList::current ( void )
 public int SplDoublyLinkedList::getIteratorMode ( void )
 public bool SplDoublyLinkedList::isEmpty ( void )
 public mixed SplDoublyLinkedList::key ( void )
 public void SplDoublyLinkedList::next ( void )
 public bool SplDoublyLinkedList::offsetExists ( mixed $index )
 public mixed SplDoublyLinkedList::offsetGet ( mixed $index )
 public void SplDoublyLinkedList::offsetSet ( mixed $index , mixed $newval )
 public void SplDoublyLinkedList::offsetUnset ( mixed $index )
 public mixed SplDoublyLinkedList::pop ( void )
 public void SplDoublyLinkedList::prev ( void )
 public void SplDoublyLinkedList::push ( mixed $value )
 public void SplDoublyLinkedList::rewind ( void )
 public string SplDoublyLinkedList::serialize ( void )
 public void SplDoublyLinkedList::setIteratorMode ( int $mode )
 public mixed SplDoublyLinkedList::shift ( void )
 public mixed SplDoublyLinkedList::top ( void )
 public void SplDoublyLinkedList::unserialize ( string $serialized )
 public void SplDoublyLinkedList::unshift ( mixed $value )
 public bool SplDoublyLinkedList::valid ( void )
}
*/
/*
class Work {
    public function __construct($title) {
        $this->title = $title;
    }
    public function doIt(){
        return $this->title;
    }
}


$work1 = new Work('action1');
$work2 = new Work('action2');
$work3 = new Work('action3');


$queue = new SplQueue();

$queue->enqueue($work1);
$queue->enqueue($work2);
$queue->enqueue($work3);

while ($queue->count() > 0) {
    echo $queue->dequeue()->doIt();
    echo "\n";
}*/




// Очередь с приоритетом

/*
SplPriorityQueue implements Iterator, Countable {
    // Методы
    public __construct ( void )
 public int compare ( mixed $priority1 , mixed $priority2 )
 public int count ( void )
 public mixed current ( void )
 public mixed extract ( void ) // Извлекает элемент (аналог dequeue)
 public void insert ( mixed $value , mixed $priority ) // Добавляет элемент (аналог enqueue)
 public bool isEmpty ( void )
 public mixed key ( void )
 public void next ( void )
 public void recoverFromCorruption ( void )
 public void rewind ( void )
 public void setExtractFlags ( int $flags )
 public mixed top ( void )
 public bool valid ( void )
}
*/
/*
class Work {
    public function __construct($title) {
        $this->title = $title;
    }
    public function doIt(){
        return $this->title;
    }
}


$work1 = new Work('action1');
$work2 = new Work('action2');
$work3 = new Work('action3');

$queue = new SplPriorityQueue();

$queue->insert($work1, 1);
$queue->insert($work2, 3);
$queue->insert($work3, 2);

foreach ($queue as $work) {
    echo $work->doIt();
    echo "\n";
}*/



// Куча

/*
abstract SplHeap implements Iterator, Countable

SplMinHeap extends SplHeap implements Iterator, Countable

SplMaxHeap extends SplHeap implements Iterator, Countable

abstract SplHeap implements Iterator , Countable {
    // Методы
public __construct ( void )
abstract protected int compare ( mixed $value1 , mixed $value2 )
public int count ( void )
public mixed current ( void )
public mixed extract ( void )
public void insert ( mixed $value )
public bool isEmpty ( void )
public mixed key ( void )
public void next ( void )
public void recoverFromCorruption ( void )
public void rewind ( void )
public mixed top ( void )
public bool valid ( void )
}*/
/*
$minHeap = new SplMinHeap();

$minHeap -> insert(2);
$minHeap -> insert(3);
$minHeap -> insert(1);
$minHeap -> insert(4);

foreach ($minHeap as $value) {
    echo $value . " \n"; // 1 2 3 4
}

$maxHeap = new SplMaxHeap();

$maxHeap -> insert(2);
$maxHeap -> insert(3);
$maxHeap -> insert(1);
$maxHeap -> insert(4);

foreach ($maxHeap as $value) {
    echo $value . " \n"; // 4 3 2 1
}
*/


// Массив фиксированной длины
/*
SplFixedArray implements Iterator, ArrayAccess, Countable
*/
/*
SplFixedArray implements Iterator , ArrayAccess , Countable {
    // Методы
    public __construct ([ int $size = 0 ] )
 public int count ( void )
 public mixed current ( void )
 public static SplFixedArray fromArray ( array $array [, bool $save_indexes = true ] )
 public int getSize ( void )
 public int key ( void )
 public void next ( void )
 public bool offsetExists ( int $index )
 public mixed offsetGet ( int $index )
 public void offsetSet ( int $index , mixed $newval )
 public void offsetUnset ( int $index )
 public void rewind ( void )
 public int setSize ( int $size )
 public array toArray ( void )
 public bool valid ( void )
 public void __wakeup ( void )
}
*/

/*
$splArray = new SplFixedArray(5);

$splArray[1] = 2;
$splArray[4] = "foo";
//$splArray[5] = "bar";

echo $splArray->getSize(); // 5

$splArray->setSize(10);

$splArray[8] = "bar";

print_r($splArray);

echo "</pre>";
*/
