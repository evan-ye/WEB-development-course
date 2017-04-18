<?php

// HTTP – Hypertext Transfer Protocol


// Пример GET
// GET /folder/index.html HTTP/1.1
// Host: www.example.com
// Accept: */*
// Accept-Language: ru
// Referrer: http://google.com/search?q=php
// User-Agent: Mozilla 4.0 (compatible; MSIE 6.1,…)

// HTTP/1.1 200 OK
// Server: MiCrosoft IIS 6
// Content-Type: text/html
// Content-Length: 16345
// Last-Modified: Sun, 03 Jul 2005 18:00:00 GMT
// <html>
// ...
// </html>


// Пример POST
// POST /action.php HTTP/1.1
// Host: www.example.com
// Accept: */*
// Accept-Language: ru
// Referrer: http://google.com/search?q=php
// User-Agent: Mozilla 4.0 (compatible; MSIE 6.1,…)
// Content-Length: 20
// login=John&pwd=password


// $_GET
echo "<pre>";
print_r($_GET);
echo "</pre>";

$email = isset($_GET['email']) ? $_GET['email'] : 'default@email.com';
echo $email;


// $_POST


if($_SERVER['REQUEST_METHOD']==='POST'){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

// Фильтрация данных из запроса
//    $email = isset($_POST['email']) ? $_POST['email'] : 'default@email.com';
//    $email = strip_tags($email);
//    $email = trim($email);
//    $email = rtrim($email);
//    $email = ltrim($email);
}


// $HTTP_RAW_POST_DATA
// always_populate_raw_post_data - php.ini

// php://input
// php://input является потоком только для чтения, который позволяет вам читать необработанные данные из тела запроса.
// В случае POST-запросов предпочтительней использовать php://input вместо $HTTP_RAW_POST_DATA, так как этот метод не зависит от специальных php.ini директив.


/*
if (isset($HTTP_RAW_POST_DATA)) {
    $post = $HTTP_RAW_POST_DATA;
}
else {
    $body = file_get_contents('php://input');
}
*/

$body = file_get_contents('php://input');
$data = array();
parse_str($body, $data);
echo "<br>";


echo "<pre>";
print_r($data);
echo "</pre>";





// Text Response
$textResponse = "Submission is successful";


// XML Response
$xmlResponse = '
<?xml version="1.0" ?>
<message id="234">
 <from>Bob</from>
 <to>Janette</to>
 <subject>Hi Janette</subject>
 <content>Janette, let\'s grab lunch today.</content>
</message>';


// JSON response
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
$jsonResponse = json_encode($arr);


echo  "<br> $textResponse";

