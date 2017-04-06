<?php
function sortByHeight($queue)
{
	$treesIndex = [];
	$heigthArray = [];
	foreach (array_keys($queue) as $index) {
		$height = $queue[$index];
		if ($height>=0&&$height<=200) {
			$heigthArray[$index] = $height;
		}
		if($height == -1){
			$treesIndex[$index] = -1;
		}
	}
	$keys = array_keys($heigthArray); 
	$values = array_values($heigthArray); 
	sort($values); 
	$heigthArray = array_combine($keys,$values); 
	$heigthArray =  array_replace_recursive($heigthArray , $treesIndex);
	ksort($heigthArray);
	return $heigthArray;
}
print_r(sortByHeight([-1, 150, 190, 170, -1, -1, 160, 180]));