<?php

$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

  $caplen = 6;
  $width =200; $height = 50;
  $font = 'fonts/arial.ttf';
  $fontsize = 17;

  header('Content-type: image/png');

  $im = imagecreatetruecolor($width, $height);
  $white = imagecolorallocate($im, 255, 255, 255);
  imagefilledrectangle($im, 0, 0, 399, 50, $white);

  for ($i = 0; $i < $caplen; $i++)
  {
    $captcha .= $characters[ rand(0, strlen($characters)-1) ]; // random symbol
    $x = ($width - 20) / $caplen * $i + 10;
    $x = rand($x, $x+4);
    $y = $height - ( ($height - $fontsize) / 2 );
    $curcolor = imagecolorallocate( $im, rand(0, 100), rand(0, 100), rand(0, 100) );// random color
    $angle = rand(-25, 25); //random angle
    imageAntiAlias($im, true);
    imageline($im, rand(1, 20), rand(5, 50), rand(190, 210), rand(1, 50), $curcolor);
    imageline($im, rand(1, 30), rand(0, 70), rand(190, 210), rand(30, 100), $curcolor);
    imagettftext($im, $fontsize, $angle, $x, $y, $curcolor, $font, $captcha[$i]);
  }

  session_start();
  $_SESSION['captcha'] = $captcha;

  imagepng($im); 
