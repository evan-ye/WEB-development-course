<?php
function sortPeople($queue) {
    $allPeople = [];
    foreach ($queue as $value) {
        if ($value < 0) {
            continue;
        } else {
            $allPeople[] = $value;
        }
    }
    unset($value);
    sort($allPeople);
    $human = 0;
    foreach ($queue as &$value) {
        if ($value < 0) {
            continue;
        } else {
            $value = $allPeople[$human];
            $human++;
        }
    }
    return $queue;
}