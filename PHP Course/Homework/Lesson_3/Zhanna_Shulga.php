function commandWeight($queue) {
$weights = [0, 0];
  foreach($queue as $key => $value) {
    if($key%2 == 0) {
      $weights[0] += $value; 
      } else {
      $weights[1] += $value;
    }
  }
return $weights;
}
$queue = [50, 60, 60, 45, 70];
print_r(commandWeight($queue));
