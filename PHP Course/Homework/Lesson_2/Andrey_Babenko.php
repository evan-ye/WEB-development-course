function getEditedString($string) {
 $open = [];
 $closed = [];
  for ($i=0; $i<strlen($string); $i++) {
    if ($string[$i] == "(") $open[] = $i;
    if ($string[$i] == ")") {
      $lastOpen = array_pop($open);
      $search = substr($string, $lastOpen, $i-$lastOpen+1);
      $replace = strrev(substr($string, $lastOpen+1, $i-$lastOpen-1));
      $string = str_replace($search, $replace, $string);
      $i -=2;
    }
  }
  return $string;
}
