function getTeamsWeight($array) {
  $teamsWeight = [0, 0];
  foreach ($array as $key => $value) {
    if ($key%2 == 0) $teamsWeight[0] += $value;
    if ($key%2 !== 0) $teamsWeight[1] += $value;
  }
  return $teamsWeight;
}
