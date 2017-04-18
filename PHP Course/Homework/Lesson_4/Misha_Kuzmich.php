function addFrames($matrix){
  foreach($matrix as &$item){
    $item = '*'.$item.'*';
  }
  $frame = str_repeat("*", strlen($matrix[0]));
  array_unshift($matrix,$frame);
  array_push($matrix,$frame);
  return $matrix;
}
print_r(
  addFrames(
  ["abc",
  "ded"]
  )
);
