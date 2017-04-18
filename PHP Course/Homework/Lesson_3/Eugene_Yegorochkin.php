function getTotalWeight($array) {

    foreach($array as $key => $value) {
      if ($value <= 0)
        return "Every value in array must be positive";
      elseif ($key % 2 == 0)
            $arr1[] = $value;
        else
            $arr2[] = $value;
    }
    $result = array_merge([array_sum($arr1)], [array_sum($arr2)]);
    return $result;
}
print_r(getTotalWeight([50, 60, 60, 45, 70]));
