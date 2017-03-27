<?php

Shirengi();

function Shirengi()
{ 
$arr = array(50, 60, 60, 45, 70);
$arr2 = array() ;
$arr3 = array() ;
  
  for ($i = 0; $i < count($arr); $i++){
      if($i%2 ==0){
          $arr2[] = $arr[$i]; 
            }else{               
              $arr3[] = $arr[$i];
            }
        }   
echo "sum(a) = " . array_sum($arr2);
echo " sum(b) = " . array_sum($arr3);
}

?>