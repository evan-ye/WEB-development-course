<?php

function getStarBorder ($matrix) {
	$star = "*";
	array_unshift($matrix, str_repeat($star, strlen($matrix[0])));
	array_push($matrix, str_repeat($star, strlen($matrix[0])));
	foreach ($matrix as &$value) {
		$value = $star . $value . $star;
	}
	return $matrix;
}

echo "<pre>";
print_r(getStarBorder(["abfdfd", "dedfdf", "frergr", "vferwe"]));
echo "</pre>";

?>