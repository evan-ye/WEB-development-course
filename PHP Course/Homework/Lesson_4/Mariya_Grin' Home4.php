<?php
function getArray($arr) {
  foreach ($arr as &$value) {
  $lenStr=strlen($value);
  $strAdd=str_pad($value, $lenStr+2, "*", STR_PAD_BOTH);
    $value = $strAdd;
    $a=str_repeat("*", $lenStr+2);
  };
array_unshift($arr, $a);
array_push($arr, $a);
return ($arr);
};
$queue = array("abc", "ded");
$b=getArray($queue);
print_r ($b);
?>
