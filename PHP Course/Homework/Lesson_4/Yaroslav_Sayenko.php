<?php
function getFrames($array) {
  foreach ($array as &$value) {
    $value = "*" . $value . "*";
}
  $lenght = strlen($array[0]);
  $additionalFrames = str_repeat("*", $lenght);
  array_unshift($array, $additionalFrames);
  array_push($array, $additionalFrames);
  return ($array);
}

print_r(getFrames(["adbc",
"dedd"]));
?>