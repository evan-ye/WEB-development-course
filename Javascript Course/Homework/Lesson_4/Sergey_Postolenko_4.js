function row(arr)
{
  var temp = arr.slice();
  temp.sort();
  var result =[];
  for(var i=0;i<(temp.length-1);i++)
  {
    for(var j=temp[i]+1; j<temp[i+1];j++)
    {
      result.push(j);
    }
  }
  return result;
  
}


var arr = [5,2,8,0];
console.log(row(arr));
console.log(arr);