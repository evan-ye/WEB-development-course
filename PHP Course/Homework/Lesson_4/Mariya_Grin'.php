function summEvenOdd ($arr){
$sum = array();
 
for($i = 0, $j = 1; $i < count($arr); $i++, $j++){
       
    if($j % 2 === 0 & $arr[$i]>0){
        $even[] = $arr[$i];
    }else if ($arr[$i]>0){
      $odd[]=$arr[$i];
    };
};
array_push ($sum, array_sum($odd), array_sum($even));
    return $sum;
};
print_r(summEvenOdd ([50, 60, 60, 45, 70]));
