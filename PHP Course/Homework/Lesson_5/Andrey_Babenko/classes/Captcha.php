<?php

class Captcha {
    static function getRandomWord($len = 5) {
        $word = array_merge(range('a', 'z'), range('A', 'Z'));
        shuffle($word);
        return substr(implode($word), 0, $len);
    }

    static function buildImage($word) {
        $chars = str_split($word);
        // Create image
        $img = imageCreateTrueColor(300,  50);
        header("Content-type:  image/png");
        imageAntiAlias($img, true);
        $transparent = imageColorAllocate($img,  0,  0,  0);
        imagecolortransparent($img, $transparent);
        //Draw noise
        for ($i=0; $i<10; $i++) {
            $random = imageColorAllocate($img,  rand(0,255),  rand(0,255),  rand(0,255));
            imageFilledEllipse ($img,  rand(1, 299),  rand(1, 49),  rand(1, 15),  rand(1, 15),  $random);
        }
        for ($i=0; $i<3; $i++) {
            $random = imageColorAllocate($img,  rand(0,255),  rand(0,255),  rand(0,255));
            imageLine($img, rand(1, $i*100), rand(1, 49), rand(1, $i*100), rand(1, 49), $random);
        }
        // Draw a word
        foreach ($chars as $key => $char) {
            $random = imageColorAllocate($img,  rand(0,255),  rand(0,255),  rand(0,255));
            imageTtfText($img,  rand(20,25),  rand(-20, 20),  ($key+1)*50, rand(30,45),  $random, '../fonts/font'.rand(1,3).'.ttf', $char);
        }
        // Build image
        imagePng($img);
    }

    static function checkCaptcha($input) {
        if(empty($_SESSION)) session_start();
        return strtolower($input) == strtolower($_SESSION['word']);
    }
}
