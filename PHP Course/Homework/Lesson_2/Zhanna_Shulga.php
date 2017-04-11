function reverse($str) {
  while (substr_count($str, '(') !== 0) {
    if(strrpos($str, "(") < strpos($str, ")")) {
      $posOpen = strrpos($str, "(");
      $posClose = strpos($str, ")");
    }
    else {
      $posOpen = strpos($str, "(");
      $posClose = strpos($str, ")"); 
      $n = substr($str, 0, $posClose-$posOpen);
      $posOpen = strrpos($n, "(");
    }
  $firstPart = substr($str, 0, $posOpen);
  $lastPart = substr($str, $posClose + 1, strlen($str) - $posClose - 1);
  $newstr = substr($str, $posOpen + 1,$posClose - $posOpen - 1);
  $newstr = strrev($newstr);
  $str = $firstPart.$newstr.$lastPart;
  }
return $str;  
}
$str = "The ((quick (brown) (fox) jumps over the lazy) dog)";
echo reverse($str);
