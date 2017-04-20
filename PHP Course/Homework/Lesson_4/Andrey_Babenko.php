function insertIntoFrame($array) {
  foreach ($array as &$value) {
    $value = "*".$value."*";
  }
  array_unshift($array, str_repeat("*", strlen($array[0])));
  array_push($array, str_repeat("*", strlen($array[0])));
  return $array;
}
