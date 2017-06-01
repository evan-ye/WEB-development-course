<?php


// Библиотека GD2 (http://www.boutell.com/gd/)

// Подключение картинки из кода php <img src="create_image.php">


// Создание и генерация изображения

//  Создание  изображения  (256  цветов)
// $img = imageCreate(500, 300);


//  Создание  изображения  (17  млн.  цветов)
$img = imageCreateTrueColor(500,  300);



//  Генерация  GIF-изображения
// header("Content-type:  image/gif");
// imageGif ($img[,"filename"]);


//  Генерация  PNG-изображения
// header("Content-type:  image/png");
// imagePng($img[,"filename"]);


// Генерация JPEG-изображения
// header("Content-type: image/jpeg");
// imageJpeg($img[,"filename"][,quality]);


// Рисование

header("Content-type:  image/png");

//  Сглаживание  (antialiasing)
imageAntiAlias($img, true);


//  Определение  цвета
$red = imageColorAllocate($img,  255,  0,  0);
$green  = imageColorAllocate($img, 0, 255, 0);
$blue  = imageColorAllocate($img, 0, 0, 255);


//  Отрисовка  линии
// imageLine($img, x1, y1, x2, y2, $color);

imageLine($img,  20,  20,  80,  280,  $red);


//  Отрисовка  прямоугольника
// imageRectangle($img,  20,  20,  80,  280,  $green);
imageFilledRectangle($img,  20,  20,  80,  280,  $green);


//  Отрисовка  многоугольника
$points  =  array(0,0,100,200,300,200);
// imagePolygon($img, $points, 3, $blue);
imageFilledPolygon($img,  $points,  3,  $blue);


//  Отрисовка  эллипса  (или  окружности)
//imageEllipse ($img,  200,  150,  300,  200,  $red);
imageFilledEllipse ($img,  200,  150,  300,  200,  $red);


//  Отрисовка  сектора  эллипса
//

// imagefilledarc($img,  200,  150,  300,  200,  0,  40,  $green, IMG_ARC_PIE);
/*
Константы для imageFilledArc:
IMG_ARC_PIE
IMG_ARC_CHORD,
IMG_ARC_NOFILL,
IMG_ARC_EDGED
*/

// imagefilledarc($img,  200,  150,  300,  200,  0,  40,  $green, IMG_ARC_CHORD);


// imagefilledarc($img,  200,  150,  300,  200,  0,  40,  $green, IMG_ARC_NOFILL | IMG_ARC_EDGED);


//  Отрисовка строки текста
// imageString($img,  5,  150,  100,  "Hello!",  $blue);


//  Отрисовка  строки  текста  с  использованием TrueType-шрифтов

imageTtfText($img,  30,  10,  300,  150,  $blue, "arial.ttf", "Hello!");


//  Создание  нового  изображения  на  базе существующего
/*
$img  =  imageCreateFromJPEG("image.jpg");
$img  =  imageCreateFromGIF("image.gif");
$img  =  imageCreateFromPNG("image.png");
*/


imagePng($img);


// GD2 Doc
// http://php.net/manual/ru/book.image.php














