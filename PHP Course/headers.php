<?php
// Запрос HEAD
// HEAD /folder/index.html HTTP/1.1
// Host:  www.example.com
// Accept:  */*
// Accept-Language:  ru
// Referrer:  Referrer:  http://google.com/search?q=keyword
// User-Agent:  Mozilla  4.0  (compatible;  MSIE  6.1,…)

// HTTP/1.1 200 OK
// Server: Microsoft IIS 6
// Content-Type: text/html
// Content-Length: 16345
// Last-Modified: Sun, 03 Jul 2005 18:00:00 GMT


// Все заголовки посылаются с помощью функции header()

// Header: Location

// header("Location: http://www.example.com");

// Проверка на отправленные заголовки
/*
if (!headers_sent()) {
    header('Location: http://www.example.com');
    exit;
}
*/


// Header: Refresh

// Перегружаем страницу
// header("Refresh: 1");

// Перегружаем страницу с редиректом
// header("Refresh: 3; url=http://example.com");

/*
if(!empty($_POST)) {
    header("Refresh: 3; url=" . $_SERVER["HTTP_REFERER"]);
    echo "Your submission was successful";
}
*/




// Header: Content-type

// header("Content-type: text/xml");
// header("Content-type: text/plain");
// header("Content-type: text/html;charset=utf-8");

// <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

/*
header("Content-type: file/octet-stream");
header("Content-Disposition:attachment; filename=\"myfile.txt\"");
*/

/*
header("Content-type: application/pdf");
header("Content-Disposition:attachment; filename=\"myfile.pdf\"");
*/




// Header: Cache-Control и Expires

// Запрет на кеширование
// header("Cache-Control: no-store");

/*
header("Cache-Control: no-store,no-cache,must-revalidate");
header("Expires: " . date("r"));
*/


// Разрешение кеширования:
/*
header("Cache-Control: public");
header("Expires: " . date("r", time()+3600));
*/




// Header: Set-Cookie
// header("Set-Cookie: name=John; expires=Wed, 19 Sep 02 14:39:58 GMT");


// Хэширование: md5
// echo md5('MeGaPa$$w0rd');   // bfb5a5275a34cf74cdfebdea0cf9c421


?>
<h1><?/*=date('H:i:s') */?></h1>
<html>

<head>
    <title>My Web Page</title>
    <style>
        h2 { border-bottom: 2px solid #ccc; padding-bottom: 10px; }
        #banner { border-style:solid !important; border-width: 1px; border-color: #000; min-height: 100px; text-align: center; margin-bottom: 50px; }
        .banner-text,
        .banner-slogan { border: 1px solid #000; margin: 20px auto; width: 50%; position: relative; }
        a {font-weight: bold; color: blue;}
        ul li { color: #000; }
        .red { color: red; }
        .hide { display: none; }
        form label { clear: left; display: block; float: left; width: 110px; margin-right: 20px; }
        form label.error { width: auto; color: red; clear: none; margin-left: 10px; }
        input { float: left; margin-bottom: 10px }
        form div { clear: both; }
        .label { clear: both; font-weight: bold; }
        #gallery { clear: both; }
        div#banner {
            width : 90%;
            height : 300px;
            padding : 20px;
            border : 5px solid black;
            margin: 20px auto;
        }
        #map {
            width: 760px;
            height: 400px;
            margin: 0 auto;
            border: 2px solid blue;
        }
        #removeMarkers {
            float: left;
            padding: 5px;
            width: auto;
            height: 20px;
            border: 2px solid blue;
        }
    </style>
    <link rel="stylesheet" type="text/css" media="all" href="assets/jquery-ui/jquery-ui.min.css">
    <script src="assets/jquery-3.1.1.min.js"></script>
    <script src="assets/jquery.easing.1.3.js"></script>
    <script src="assets/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/jquery-validation-1.16.0/dist/jquery.validate.min.js"></script>
    <script src="script.js"></script>
</head>

<body>

<h1>Пример формы</h1>



<form method="post" name="signup" id="signup">
    <div>
        <label for="username" class="label">Name</label>
        <input name="username" type="text" id="username" size="36" value="default value" defaultValue="default value" class="required" title="Please give us your name.">
        <label for="birthdate" class="label">Birth date</label>
        <input name="birthdate" type="text" id="birthdate" size="36" value="">
        <label for="email" class="label">Email</label>
        <input name="email" type="email" id="email" size="36" value="">
        <label for="password" class="label">Password</label>
        <input name="password" type="password" id="password" size="36" value="">
        <label for="password" class="label">Confirm pass</label>
        <input name="confirm_password" type="password" id="confirm_password" size="36" value="">
    </div>
    <div><div class="label">Hobbies</div>
        <label for="heliskiing">Heli-skiing</label>
        <input type="checkbox" name="hobby" id="heliskiing" value="helisking">
        <label for="pickle">Pickle eating</label>
        <input type="checkbox" name="hobby" id="pickle" value="pickle">
        <label for="walnut">Walnut butter</label>
        <input type="checkbox" name="hobby" id="walnut" value="walnut">
    </div>
    <div>
        <label for="planet" class="label">Planet of Birth</label>
        <select name="planet" id="planet">
            <option>Earth</option>
            <option>Mars</option>
            <option>Alpha Centauri</option>
            <option>You've never heard of it</option>
        </select>
    </div>
    <div class="label">Would you like to receive annoying e-mail from us?</div>
    <div class="indent">
        <label for="yes">Yes</label>
        <input type="radio" name="spam" id="yes" value="yes" checked="checked">
        <label for="definitely">Definitely</label>
        <input type="radio" name="spam" id="definitely" value="definitely">
        <label for="choice">Do I have a choice?</label>
        <input type="radio" name="spam" id="choice" value="choice">
    </div>
    <div>
        <input type="submit" name="submit" id="submit" value="Submit">
        <input type="reset" name="reset" id="reset" value="Reset">
    </div>
</form>
</body>

</html>
