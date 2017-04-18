<?php
function getNumbers($numbers) {
  $sum = array_sum($numbers);
  $first = 0;
   foreach($numbers as $key => $value) {
    if($key%2 == 0) {
      $first += $value; 
    } 
    }
  $diff = $sum - $first;
  $result = array($first, $diff);
  return $result;
}
$numbers = [50, 60, 60, 45, 70];
print_r(getNumbers($numbers));
?>