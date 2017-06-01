function maxProduce(arr)
{
  
  if(arr.length>=1 && isNaN(arr[0]))
    return "Need another type of array";
  if(arr.length>=2)
  {
    max=arr[0]*arr[1];
    for(i=1; i<(arr.length-1); i++)
    {
      if(isNaN(arr[i]))
        return "Need another type of array";
      if((arr[i]*arr[i+1])>max) 
        max = arr[i]*arr[i+1];
    }
    return max;
  }
  else return "Need more elements";
  
}

a = [1];
console.log(maxProduce(a));

b = [30, 6, -2, -50, 7, 3];
console.log(maxProduce(b));

c = ['a', 'b'];
console.log(maxProduce(c));