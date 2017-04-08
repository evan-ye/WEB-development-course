<?php
function getEditedString($string) {
  preg_match_all('/\((.+)\)/', $string, $matches);
  for ($i=0; $i<count($matches[1]); $i++) {
    if (strpos($matches[1][$i], "(") > strpos($matches[1][$i], ")")) {
      preg_match_all('/\((.+)\)/U', $matches[0][$i], $matches2);
      for ($j=0; $j<count($matches2[1]); $j++) {
        $matches2[1][$j] = getEditedString($matches2[1][$j]);
        $string = str_replace($matches2[0][$j], strrev($matches2[1][$j]), $string);
      }
    } else {
      $matches[1][$i] = getEditedString($matches[1][$i]);
      $string = str_replace($matches[0][$i], strrev($matches[1][$i]), $string);
    }
  }
  return $string;
}
?>
