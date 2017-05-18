<?php

// XML (Extensible Markup Language) - Расширяемый язык разметки


// Описание структуры документа
// DTD–Document Type Definition

// Пример DTD
'
<!ELEMENT catalog (book+)>
<!ELEMENT book (title, author+, price, exists?)>
<!ELEMENT title (#PCDATA)>
<!ELEMENT author (#PCDATA)>
<!ELEMENT price (#PCDATA)>
<!ELEMENT exists (#PCDATA)>
<!ATTLIST price currency  CDATA  #IMPLIED>';

'
<?xml version="1.0"?>
<!DOCTYPE catalog SYSTEM "catalog.dtd">
';


// XML Schema

// Пример простой схемы
// https://ru.wikipedia.org/wiki/XML_Schema
// https://www.w3.org/TR/xmlschema-0/



// Средства PHP 5 для работы с XML

// SAX (Simple API for XML)
// http://www.saxproject.org/

/*
//Создание  парсера
$parser  =  xml_parser_create(["encodig"]);
//encoding:  ISO-8859-1,  UTF-8  и  US-ASCII

//Определение  функций  обработки
function  onStart($xml,  $tag,  $attributes){}
function  onEnd($xml,  $tag){}
function  onText($xml,  $data){}

//Регистрация  функций
xml_set_element_handler($parser, "onStart","onEnd");
xml_set_character_data_handler($parser,"onText");

//Запуск  парсера
xml_parse($parser,  "XML  в  виде  строки");

*/

// Пример
/*
$parser = xml_parser_create();

//Определение  функций  обработки
function  onStart($xml,  $tag,  $attributes){
   if($tag == 'CATALOG'){
       echo '<table>
                <tr>
                    <th>author</th>
                    <th>title</th>
                    <th>pubyear</th>
                    <th>price</th>
                </tr>';
   }
    else if($tag == 'BOOK'){
        echo '<tr>';
    }
    else if($tag == 'AUTHOR' || $tag == 'TITLE' || $tag == 'PUBYEAR' || $tag == 'PRICE'){
        echo '<td>';
    }
}

function  onEnd($xml, $tag){
    if($tag == 'CATALOG'){
        echo '</table>';
    }
    else if($tag == 'BOOK'){
        echo '</tr>';
    }
    else if($tag == 'AUTHOR' || $tag == 'TITLE' || $tag == 'PUBYEAR' || $tag == 'PRICE'){
        echo '</td>';
    }
}

function  onText($xml, $data){
    echo $data;
}

//Регистрация  функций
xml_set_element_handler($parser, "onStart","onEnd");
xml_set_character_data_handler($parser,"onText");

$xml = file_get_contents('xml/catalog.xml');
xml_parse($parser,  $xml);
*/



// DOM (Document Object Model)
/*
// Работа с DOM чтение
// $dom  =  new  DOMDocument();
$dom = new DOMDocument("1.0","utf-8");

//Загрузка  XML-документа
$dom->load("xml/catalog.xml");
//Доступ  к  корневому  элементу
$root = $dom->documentElement;


//Получение  типа  элемента
$type  =  $root->nodeType;

//Получение  всех  потомков  любого  элемента
$children  =  $root->childNodes;

//Получение  текстового  содержимого
// echo  $root->textContent;

//Обращение  к  узлам  с  определенным  именем
$title  =  $dom->getElementsByTagName("title");
echo  $title->item(0)->textContent;
*/



// Создание нового XML-элемента
/*
$dom = new DOMDocument("1.0","utf-8");
$dom->load("xml/catalog.xml");

//Доступ  к  корневому  элементу
$root  =  $dom->documentElement;

//Создание  нового  XML-элемента
$bookDOM = $dom->createElement("book");

$titleDOM = $dom->createElement("title");

//Создание  нового  текстового  элемента
$titleText  =  $dom->createTextNode("PHP7");


//Присоединение  новых  элементов  к  родительским элементам
$titleDOM->appendChild($titleText);
$bookDOM->appendChild($titleDOM);
$root->appendChild($bookDOM);

//Сохранение  объекта  DOMDocument  в  файл
$dom->save("xml/newcatalog.xml");

//Вариант  создания  нового  XML-элемента  с  текстом
$titleDOM  =  $dom->createElement("title","PHP  5");
*/



// SimpleXML, приципы работы

//Конвертируем XML-файл в объект
/*
$sxml = simplexml_load_file("xml/catalog.xml");

//Вывод названия первой книги
echo $sxml->book[0]->title;

//Изменение автора второй книги
$sxml->book[1]->author = "New Author";

// Saving the whole modified XML to a new filename
$sxml->asXml('xml/catalog_updated.xml');

// Save only the modified node
$sxml->book[1]->asXml('xml/catalog_only-book1.xml');
*/

/*
$sxml  =  <<<LABEL
 <book>
   <title>PHP</title>
   <author>Zeev  Suraski</author>
 </book>
LABEL;

//Конвертируем  XML-строку  в  объект
$sxml = simplexml_load_string($sxml);
*/



// Применение файла CSS к XML-документу на стороне клиента



// XSL/T (Extensible Stylesheet Language /Transformations)


//Загрузка  исходного  XML-документа

/*
$xml  =  new  DOMDocument();
$xml->load("xml/catalog.xml");


//Загрузка  таблицы  стилей  XSL
$xsl  =  new  DOMDocument();
$xsl->load("xslt/catalog.xsl");


//Создание  XSLT-процессора  и  загрузка  в  него стилевой  таблицы
$processor = new XSLTProcessor();

$processor->importStylesheet($xsl);

//Выполнение  трансформации  и  получение результатов
$html  =  $processor->transformToXml($xml);

echo $html;
*/






echo "<pre>";
// print_r($sxml) ;
echo "</pre>";








