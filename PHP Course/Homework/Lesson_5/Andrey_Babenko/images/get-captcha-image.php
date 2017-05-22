<?php
function loadClass ($class_name) {
    require_once "../classes/".$class_name.".php";
}
spl_autoload_register('loadClass');
session_start();
$_SESSION['word'] = Captcha::getRandomWord();
Captcha::buildImage($_SESSION['word']);