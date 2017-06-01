<?php

// Работа с файлами

// Получение сведений о файлах

// Существует ли файл?
// file_exists("test.txt")

// Узнаем размер файла
// filesize("test.txt");


// Дата последнего обращения к файлу
// date("d M Y", fileatime("test.txt"));

// Дата изменения файла
// filemtime("test.txt");

// Дата создания файла(Windows)
// filectime("test.txt");



// Файлы: открытие и закрытие

// режимы работы
// `r` — открыть файл только для чтения;
// `r+` — открыть файл для чтения и записи;
// `w` — открыть файл только для записи. Если он существует, то текущее содержимое файла уничтожается. Текущая позиция устанавливается в начало;
// `w+` — открыть файл для чтения и для записи. Если он существует, то текущее содержимое файла уничтожается. Текущая позиция (курсор) устанавливается в начало;
// `а` — открыть файл для записи. Текущая позиция устанавливается в конец файла;
// `а+` — открыть файл для чтения и записи. Текущая позиция устанавливается в конец файла;
// `b` — обрабатывать бинарный файл. Этот флаг необходим при работе с бинарными файлами в ОС Windows.


// $f = fopen("test.txt", 'a+') or die("Ошибка");


// Примеры
// $f = fopen("http://www.you_domain/test.txt","r");


// Файлы: чтение
// fread($f, 10);
// fread($f, 10);

// Если нужно прочитать весь файл то
// $file = fread($f, 9999); // указать заведомо большое число символов
// echo $file = fread($f, filesize('test.txt')); // определить длину файла и указать ее

// Прочитать строку из файла:
// fgets(int f[, int length])
// echo fgets($f);
// echo fgets($f, 10);

// Прочитать строку из файла и отбросить HTML-теги:
// fgetss(int f, int length [, string allowable])
// fgetss($f, 255, '<br><a>');


// Считывает символ из файла:
// echo fgetc($f);
// echo fgetc($f);
// echo fgetc($f);
// echo fgetc($f);
// echo fgetc($f);


// Файлы: запись
// fwrite(int f, string ws [, int length])


// fread($f, 7); // Для режима r+
// fwrite($f, "Наш текст");

// Файлы: манипуляции с курсором
// fseek(int f, int offset [, int whence])
// whence:

// SEEK_SET — движение начинается с начала файла;
// SEEK_CUR — движение идет от текущей позиции (по-умолчанию);
// SEEK_END — движение идет от конца файла.


/*
 fseek($f, -50, SEEK_END);
echo fread($f, 50);
*/

// Узнаем текущую позицию
// echo ftell($f);

// сброс курсора
// rewind($f)


// конец файла
// feof($f)


// Закрываем файл
// fclose($f);



// Файлы: прямая работа с данными
// Получаем содержимое файла в виде массива
/*
echo "<pre>";
print_r(file('test.txt'));
echo "</pre>";
*/


// Чтение файла в одну большую строку целиком
// print_r(file_get_contents('test.txt'));


/*
$array = array("I", "love", "you");
file_put_contents("test.txt",$array);
*/



// Файлы: управление

// Копирование файла
// copy('test.txt', 'new_test.txt');

// Переименование файла
// rename('new_test.txt', 'super_new_test.txt');

// Удаление файла
// unlink('super_new_test.txt');




// Директории: работа и манипуляции

// Создание директории
// mkdir('new_dir_777', 0777);

// Удаление директории
// rmdir('new_dir_777');

// Открываем директорию
// $dir = opendir('assets');

// Читаем директорию
// $name = readdir($dir);
/*print_r(readdir($dir));
echo "<br>";
print_r(readdir($dir));
echo "<br>";
print_r(readdir($dir));
echo "<br>";
print_r(readdir($dir));
echo "<br>";
print_r(readdir($dir));
echo "<br>";
print_r(readdir($dir));*/


// Закрываем директорию
// closedir($dir)

// Check file
// echo is_file('test.txt'); // 1
// echo is_file('assets'); // 0

// Check directory
// echo is_dir('assets'); // 1


// Сканируем директорию
/*
 echo "<pre>";
print_r(scandir('assets'));
echo "</pre>";
*/

/*
echo "<pre>";
print_r(scandir('.')); // Возвращает список файлов по алфавиту
print_r(scandir('.', 1)); // Возвращает список файлов по алфавиту в обратном порядке
echo "</pre>";
*/


// Файлы: загрузка на сервер

print_r($_FILES);

if($_FILES['userfile']['error'] == 0) {
    $tmp = $_FILES['userfile']['tmp_name'];
    $name = $_FILES['userfile']['name'];
    move_uploaded_file($tmp, __DIR__ . '/upload/' . $name);
}

?>

<form enctype="multipart/form-data" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="51200">
    <input type="file" name="userfile">
    <input type="submit" value="Send">
</form>
