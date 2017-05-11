<?php

// PHP Data Objects

/*
// USING EXTENSIONS

// MySQL
mysql_connect('host', 'user', 'password');
mysql_select_db('db');

// MySQLi
$db = mysqli_connect('host', 'user', 'password', 'db'); // MySQLi ООП
$db = new mysqli('host', 'user', 'password', 'db');

// PostgreSQL
$db = pg_connect("host=host dbname=db user=user password=password");

// SQLite2
$db = sqlite_open("db");

// SQLite2 ООП
$db = new SQLiteDatabase("db");

// SQLite3
$db = new SQLite3("db");




// USING PDO

// MySQL
$pdo = new PDO('mysql:host=host;dbname=db', $user, $pass);

// PostgreSQL
$pdo = new PDO('pgsql:host=host;dbname=db', $user, $pass);

// SQLite
$pdo = new PDO('sqlite:db');


// Постоянное соединение
$pdo = new PDO('mysql:host=host;dbname=test', $user, $pass, [PDO::ATTR_PERSISTENT => true]);
*/



// Просмотр доступных драйверов для PDO
/*
foreach(PDO::getAvailableDrivers() as $driver){
    echo $driver.'<br />';
}
*/



// Выполнение запроса без выборки (INSERT/UPDATE/DELETE)
$pdo = new PDO('mysql:host=localhost;dbname=webdev', 'root','root');

// $sql = "INSERT INTO users(user_name, email) VALUES('john', 'john@smith.com')";

/*
// USING EXTENSIONS

// MySQL
$result = mysql_query($sql);

// MySQLi
$result = mysqli_query($cnn, $sql);

// MySQLi $result = $db->query($sql);

// PostgreSQL
$result = pg_query($sql);

// SQLite2
$result = sqlite_exec($sql, $db);

// SQLite2 ООП
$result = $db->queryExec($sql);

// SQLite3
$result = $db->exec($sql);
*/


/*
// USING PDO
$result = $pdo->exec($sql);

// Проверка ошибок
if($result === false) echo "Ошибка в запросе";

print_r($result);
*/


// Экранирование строки
/*
// USING EXTENSIONS

$name = $_POST["user"];

// MySQL
$name = mysql_real_escape_string($name);

// MySQLi
$name = mysqli_real_escape_string($cnn, $name);

// MySQLi ООП
$name = $db->real_escape_string($name);

// PostgreSQL
$name = pg_escape_string($name);

// SQLite2
$name = sqlite_escape_string($name);

// SQLite3
$name = $db->escapeString($name);

$sql = "INSERT INTO users(name) VALUES('$name')";



// USING PDO
$name = $pdo->quote($name);
$sql = "INSERT INTO users(name) VALUES($name)";
*/



// Выборка данных
// $sql = "SELECT id, user_name FROM users";
/*
// USING EXTENSIONS

// MySQL
$result = mysql_query($sql);

// MySQLi
$result = mysqli_query($cnn, $sql);

// MySQLi ООП
$result = $db->query($sql);

// PostgreSQL
$result = pg_query($sql);

// SQLite2
$result = sqlite_query($sql, $db);

// SQLite2 ООП
$result = $db->query($sql);

// SQLite3
$result = $db->query($sql);
*/


/*
// USING PDO
// $stmt = $pdo->query($sql);

// Обработка ошибок
$stmt = $pdo->query($sql) or die('Ошибка в запросе!');

// Обработка результата
$row = $stmt->fetch();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($row);

print_r($stmt->fetch(PDO::FETCH_ASSOC));
print_r($stmt->fetch(PDO::FETCH_ASSOC));

*/


// Обработка ошибок
/*
$pdo = new PDO("sqlite: test.db");

// Используем исключения $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    // Что-то произошло
} catch(PDOException $e){
    $e -> getCode() . ":" . $e -> getMessage();
}

// Используем предупреждения
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

// Не выводить никаких сообщений
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

echo $pdo -> errorCode();
print_r( $pdo -> errorInfo() );
*/


// Результат в виде объекта


//$sql = "SELECT id, user_name, email FROM users";

//$stmt = $pdo->query($sql);

/*
// Приведение результата к объекту
$obj = $stmt->fetch(PDO::FETCH_OBJ);

echo $obj->id . "\n";
echo $obj->user_name . "\n";
echo $obj->email . "\n";
*/


// Ленивое приведение
/*
$obj = $stmt->fetch(PDO::FETCH_LAZY);
echo $obj[0] . "\n";
echo $obj['user_name'] . "\n";
echo $obj->email . "\n";

print_r($obj);
*/


// Использование класса

/// Поскольку классов с именами 1 или 2 нет, то создается экземпляр класса stdClass
// $obj = $stmt->fetch( PDO::FETCH_CLASS|PDO::FETCH_CLASSTYPE );

/*
class John_Smith {
    public $id, $user_name, $email;
}


$sql = "SELECT user_name, id, user_name, email FROM users";
$stmt = $pdo->query($sql);
$obj = $stmt->fetch( PDO::FETCH_CLASS|PDO::FETCH_CLASSTYPE );
*/

/*
class guestpost {
    public $id, $title, $description;
}
$sql = "SELECT title, id, title, description FROM pages";
$stmt = $pdo->query($sql);
*/

// Явное указание названия класса для создания объекта
/*
class User {
    public $id, $user_name, $email;
}
$sql = "SELECT id, user_name, email FROM users";
$stmt = $pdo->query($sql);
$obj = $stmt->fetchObject('User');
*/


// Полная выборка
$sql = "SELECT id, user_name, email FROM users";
$stmt = $pdo->query($sql);


// Получаем массив массивов
/*
$obj = $stmt->fetchAll(PDO::FETCH_ASSOC); // по-умолчанию PDO::FETCH_BOTH
*/

// Получаем массив объектов класса User
/*
class User {
    public $id, $user_name, $email;
}

$obj = $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
*/


// Выбираем данные только из первого поля
// $obj = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);


// Группируем значения второго поля по значению первого поля
// $obj = $stmt->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_GROUP);


// Выбираем уникальные значения из первого поля
// $obj = $stmt->fetchAll(PDO::FETCH_COLUMN|PDO::FETCH_UNIQUE);


// Используем функцию обратного вызова
/*
function foo($name, $email){
    return $name . ': '. $email . "\n";
}

$obj = $stmt->fetchAll(PDO::FETCH_FUNC, 'foo');
*/


// Подготовленные запросы (prepared statements)

// Именованные псевдопеременные
/*
$sql = 'SELECT email FROM users WHERE id = :id AND user_name = :user_name';
$stmt = $pdo->prepare($sql);

$stmt->execute( [':id' => 1, ':user_name' => 'John_Smith'] );
$john = $stmt->fetchAll();
*/


// Неименованные псевдопеременные
/*
$sql = 'SELECT email FROM users WHERE id = ? AND user_name = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute( [1, 'John_Smith'] );
$john = $stmt->fetchAll();
*/



// Привязка параметров
$id = 1;
$user_name = 'John_Smith';

// Для именованных псевдопеременныx
/*
$sql = 'SELECT email FROM users WHERE id = :id AND user_name = :user_name';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->bindParam(':user_name', $user_name, PDO::PARAM_STR);
$stmt->execute();
$john = $stmt->fetchAll();
*/


// Для неименованных псевдопеременныx
/*
$sql = 'SELECT email FROM users WHERE id = ? AND user_name = ?';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $id, PDO::PARAM_INT);
$stmt->bindParam(2, $user_name, PDO::PARAM_STR);
$stmt->execute();
$john = $stmt->fetchAll();
*/


// Привязка значений
// Для именованных псевдопеременныx
/*
$sql = 'SELECT email FROM users WHERE id = :id AND user_name = :user_name';
$stmt = $pdo->prepare($sql);
$stmt -> bindValue(':id', $id, PDO::PARAM_INT);
$stmt -> bindValue(':user_name', $user_name, PDO::PARAM_STR);
$stmt->execute();
$john = $stmt->fetchAll();
*/


// Для неименованных псевдопеременныx
/*
$sql = 'SELECT email FROM users WHERE id = ? AND user_name = ?';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $id, PDO::PARAM_INT);
$stmt->bindValue(2, $user_name, PDO::PARAM_STR);
$stmt->execute();
$obj = $stmt->fetchAll();
*/


// Привязка возвращаемых полей к именам переменных
/*
$sql = 'SELECT id, user_name, email FROM users';
$stmt = $pdo->prepare($sql);
$stmt->execute();

$stmt->bindColumn(1, $id);
$stmt->bindColumn(2, $user_name);
$stmt->bindColumn('email', $email);


while($stmt->fetch(PDO::FETCH_BOUND))
    echo "$id : $user_name : $email\n";
*/



// Использование транзакций
/*
try {
    $pdo->beginTransaction();
    // Исполняем много запросов
    // Если все запросы исполнены успешно, то фиксируем это
}catch (PDOException $e) {
    // Если хотя бы в одном запросе произошла ошибка, откатываем всё назад
    $pdo->rollBack();
}
*/







echo "<pre>";
// print_r($john);
echo "</pre>";
