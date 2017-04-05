<?php
function getOrder($array){
    
    $keys = array_keys($array, "-1");
    sort($array);
    $arrlength = count($array);
    
    for ($i = 0; $i < $arrlength; $i++) {
        if ($array[$i] < 0) {
            unset($array[$i]);
        }
    }
    $keyslength = count($keys);
    for ($i = 0; $i < $keyslength; $i++) {
        array_splice($array, $keys[$i], 0, -1);
    }
    
    $comma_separated = implode(",", $array);
    echo $comma_separated;
}

getOrder([-1, 150, 190, 170, -1, -1, 160, 180]);
?>
