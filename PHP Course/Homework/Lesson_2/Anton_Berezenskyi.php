<?php 

function reverseStr ($str) {
	$parentheses1 = [];
	$parentheses2 = [];
	for ($i = 0; $i < strlen($str); $i++) {
		if ($str{$i} == '(') {
			$parentheses1[] = $i;
		} elseif ($str{$i} == ')') {
			$parentheses2[] = $i;
		}
	};
	if (count($parentheses1) == count($parentheses2)) {
		if ($parentheses1[count($parentheses1) - 1] < $parentheses2[0]) {
			$arrLength = count($parentheses1);
			$startArrLength = 0;
			while ($arrLength > 0) {
			$workStr = substr($str, ($parentheses1[($arrLength - 1)] + 1), ($parentheses2[$startArrLength] - ($parentheses1[($arrLength - 1)] + 1)));
			$str = str_replace($workStr, strrev($workStr), $str);
			$startArrLength++;
			$arrLength--;
			}
		} else {
			for ($j = 0; $j < count($parentheses1); $j++) {
				$workStr = substr($str, ($parentheses1[$j] + 1), ($parentheses2[$j] - ($parentheses1[$j] + 1)));
				$str = str_replace($workStr, strrev($workStr), $str);
			}
		}
	}
	$str = str_replace('(', '', $str);
	$str = str_replace(')', '', $str);
	return $str;
}

echo (reverseStr("abc(cba)ab(bac)c"));

?>