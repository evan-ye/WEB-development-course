function getEditedString($string) {
  if (!strpos($string, "(")) {
   return $string;
  }
  if (strrpos($string, "(") < strpos($string, ")")) {
    $start = strrpos($string, "(");
    $end = strpos($string, ")");
  } else {
    $start = strpos($string, "(");
    $end = strpos($string, ")");
  }
  $subStr = substr($string, $start+1, $end-$start-1);
  $string = str_replace("(".$subStr.")", strrev($subStr), $string);
  return getEditedString($string);
}
