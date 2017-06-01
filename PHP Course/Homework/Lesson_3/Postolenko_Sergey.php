function func($arr)
{
  $result=[0,0];
  for($i=0;$i<count($arr);$i++)
  {
    $result[$i%2]+=$arr[$i];
  }
  return $result;
}

$myarr = [1,2,3,4];
print_r(func($myarr));