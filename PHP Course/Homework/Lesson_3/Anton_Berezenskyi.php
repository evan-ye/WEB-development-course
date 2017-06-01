<?php

function getWeight ($arr) {
	$sumEven = 0; $sumOdd = 0; $result = [];
	foreach ($arr as $k => $v) {
		if ($k % 2 == 0)
			$sumEven += $v;
		else
			$sumOdd += $v;
	}
	$result[] = $sumEven;
	$result[] = $sumOdd;
	return $result;
}

print_r(getWeight([50, 60, 45, -45, 25, 50]));

?>