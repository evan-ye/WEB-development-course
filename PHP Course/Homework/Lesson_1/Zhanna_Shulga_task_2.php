function makeQueue($queue){
  $people = [];
  foreach($queue as $value){
    if ($value < -1 or $value > 200) {
      return "Input correct data!";
    }
    if ($value !== -1) {
        $people[] = $value; 
    }
  }
  sort($people);
  $number = 0;
  foreach($queue as &$value){
    if ($value !== -1) {
      $value = $people[$number];
      $number++;
    }
  }
 return $queue;
}
$queue = [-1, 150, 190, 170, -1, -1, 160, 180];
print_r(makeQueue($queue));
