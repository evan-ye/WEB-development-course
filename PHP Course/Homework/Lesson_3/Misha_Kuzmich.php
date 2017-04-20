function sortByWeight($rank){
  $return = array();
  $team1 = 0;
  $team2 = 0;
  foreach ($rank as $index=>$weight){
    if(($index+1)%2 === 1){
      $team1 += $weight;
    }
    if(($index+1)%2 === 0){
      $team2 += $weight;
    }
  }
  array_push($return,$team1,$team2);
  return $return;
}
sortByWeight([50, 60, 60, 45, 70]);
