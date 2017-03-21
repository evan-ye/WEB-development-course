function func(arr)
{
  var flag;
  for(var i =0; i<arr.length;i++)
  {
    Ascending=true;
    for(var j=1;j<arr.length;j++)
    {
      if(arr[j]<arr[(i==j-1)?(j-2):(j-1)])
      {
        Ascending=false; break;
      }
      if(i==j) continue;
    }
    if(Ascending) return true;
  }
  return false;
}


var arr = [4,2,0];
console.log(func(arr));