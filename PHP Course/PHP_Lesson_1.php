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
// Тег '<?=' с версии 5.4.0 доступен всегда, не эависомо от настройки "short_open_tag" в php.ini  ?>
