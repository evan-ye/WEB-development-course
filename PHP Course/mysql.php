<?php

// Устанавливаем соединение с сервером БД и создаем линк на базу данных
// $conn = mysql_connect("host","login","pass");

/*
$conn = mysql_connect("localhost", "root", "1234") or die("Ошибка!");

// Выборка базы делается так
mysql_select_db('webdev');


// Функции для отслеживания ошибок
mysql_errno ($conn); // Возвращает номер ошибки
mysql_error ($conn); // Возвращяет описание ошибки


// Закрываем соединение
mysql_close($conn);
*/


/*
$conn = mysql_connect("localhost", "root", "root") or die("Ошибка!");
mysql_select_db("webdev") or die(mysql_error());

if(mysql_errno() > 0){
    echo mysql_errno(). ": ". mysql_error();
}


// Отправка запроса.
$sql_query = "SELECT * FROM users";
$result = mysql_query($sql_query);


var_dump($result);

// $row = mysql_fetch_array($result);

echo "<pre>";
print_r(mysql_fetch_array($result, MYSQL_NUM)); // MYSQL_BOTH, MYSQL_NUM, MYSQL_ASSOC
// mysql_fetch_row($result)
echo "</pre>";
echo "<pre>";
print_r(mysql_fetch_array($result, MYSQL_ASSOC));
// mysql_fetch_assoc($result)
echo "</pre>";
*/


/*
while($row = mysql_fetch_assoc($result)) {
    echo $row["user_name"] . "<br>";
}
*/


// Точечная выборка
//echo mysql_result($result, 2, "user_name");


// Другие функции для работы с результатом выборки:
/*
mysql_num_rows($result); //Количество записей
mysql_num_fields($result); //Кол-во полей
mysql_field_name($result, int field); //Имя поля
*/


/*
mysql_affected_rows($conn); //Кол-во изменений в строках посе запроса. Нужно вызывать сразу после запроса

mysql_insert_id($conn); // id последней записи. Можно получить сразу после запроса INSERT. Работает только если есть поле с автоинкрементом, в противном случае вернет 0

mysql_close($conn);
*/



// Расширение mySQLi


// Процедурный подход
$conn = mysqli_connect('localhost','root','root','webdev');
/*
$result = mysqli_query($conn, 'SELECT * FROM pages');
while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
    print_r($row);
}
mysqli_free_result($result);
*/


// Использование SQL View
/*
$sql = 'CREATE VIEW new_view AS SELECT id, date, title AS value FROM pages';
$result = mysqli_query($conn, $sql);
*/


// Использование подготовленных запросов
mysqli_query($conn, "PREPARE customselect FROM
       'SELECT * FROM pages 
            WHERE id = ?'");
mysqli_query($conn, "SET @id = 3");
$result = mysqli_query($conn,"EXECUTE customselect USING @id");
print_r($result->fetch_assoc());

mysqli_close($conn);



// OOP подход
/*
$mysqli = new mysqli("localhost", "root", "root", "webdev");
$result = $mysqli->query("SELECT 'Привет, дорогой пользователь MySQL!' AS _message FROM DUAL");
$row = $result->fetch_assoc();
echo htmlentities($row['_message']);
*/





