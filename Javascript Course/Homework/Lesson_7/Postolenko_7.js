function maxstr(arr)
{
  var count = [];
  
  for(i=0;i<arr.length; i++)
  {
    if(count[arr[i].length]===undefined) 
      count[arr[i].length]=[];
    count[arr[i].length].push(arr[i]);
  }
  
  return count[count.length-1];
}


var mystrs = ["so", "many", "words", ".", "Maybe", "more", "Oh", "Hi", "Mark"];

console.log(maxstr(mystrs));