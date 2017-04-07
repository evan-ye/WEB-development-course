function getReverseString($string) { 
preg_match_all('/\(([^\)]*)\)/', $string, $matches);

for ($x = 0; $x < count($matches); $x++) {
  $string =  str_replace($matches[0][$x], strrev($matches[1][$x]), $string);
} 
 print_r($string);
}
getReverseString("a(bc)de");
