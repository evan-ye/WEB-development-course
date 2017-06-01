<?php

echo "<pre>";
// Generator
/*
function numbers() {
    echo "START\n";
    for ($i = 0; $i < 5; ++$i) {
        // Обратите внимание, что $i сохраняет свое значение между вызовами.
        yield $i;
    }
    echo "FINISH\n";
}

$x = numbers();


foreach ($x as $value) {
    echo "VALUE: $value\n";
}*/


/*
Generator implements Iterator {
     //Методы
     public mixed current ( void )
     public mixed getReturn ( void )
     public mixed key ( void )
     public void next ( void )
     public void rewind ( void )
     public mixed send ( mixed $value )
     public mixed throw ( Throwable $exception )
     public bool valid ( void )
     public void __wakeup ( void )
}
*/


// Возврат ключей?
/*
function gen() {
    yield 'a';
    yield 'b';
    yield 'name' => 'John';
    yield 'd';
    yield 10 => 'e';
    yield 'f';
}


foreach (gen() as $key => $value) {
    echo "$key : $value\n";
}
*/



// Передача значения
/*
function echoLogger() {
    while (TRUE) {
        echo 'Log: ' . yield . "<br>";
    }
}

$logger = echoLogger();
$logger->send('Foo');
$logger->send('Bar');

*/


/*
function getLinesFromFile($fileName) {
    if (!$fileHandle = fopen($fileName, 'r')) {
        return;
    }

    while (false !== $line = fgets($fileHandle)) {
        yield $line;
    }

    fclose($fileHandle);
}


class LineIterator implements Iterator {
    protected $fileHandle;

    protected $line;
    protected $i;

    public function __construct($fileName) {
        if (!$this->fileHandle = fopen($fileName, 'r')) {
            throw new RuntimeException('Couldn\'t open file "' . $fileName . '"');
        }
    }

    public function rewind() {
        fseek($this->fileHandle, 0);
        $this->line = fgets($this->fileHandle);
        $this->i = 0;
    }

    public function valid() {
        return false !== $this->line;
    }

    public function current() {
        return $this->line;
    }

    public function key() {
        return $this->i;
    }

    public function next() {
        if (false !== $this->line) {
            $this->line = fgets($this->fileHandle);
            $this->i++;
        }
    }

    public function __destruct() {
        fclose($this->fileHandle);
    }
}
*/



function numbers() {
    echo "START\n";
    for ($i = 0; $i < 5; ++$i) {
        // Обратите внимание, что $i сохраняет свое значение между вызовами.
        yield $i;
    }
    echo "FINISH\n";
    return;
}

$x = numbers();


foreach ($x as $value) {
    echo "VALUE: $value\n";
}





echo "</pre>";
