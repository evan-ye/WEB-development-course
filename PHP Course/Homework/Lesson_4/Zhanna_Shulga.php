function makeBorder($matrix) {
  if (!$matrix) {
    return "Введите массив.";
  }
  foreach($matrix as &$value) {
    $value ="*".$value."*";
  }
  array_unshift($matrix, str_repeat("*", strlen($matrix[0])));
  array_push($matrix, str_repeat("*", strlen($matrix[0])));
  return $matrix;
}
$matrix = ["abd", "abd", "abd", "abd"];
print_r(makeBorder($matrix));
