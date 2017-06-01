function fnc(house)
{
  var matr = house;
  var sum=0
  for(i=0;i<matr.length;i++)
  {
    for(j=0;j<matr[i].length;j++)
    {
      if(matr[i][j]===0)
      {
        for(k=i+1;k<matr.length;k++)
        {
          matr[k][j]=0;
        }
      }
      else
        sum+=matr[i][j];
    }
  }
 
  return sum;
}

var appartment =[
  [1, 5,9],
  [0, 1,0],
  [55,2,3]
  ];
  
  console.log(fnc(appartment));
  
  matrix = [[0, 1, 1, 2], 
          [0, 5, 0, 0], 
          [2, 0, 3, 3]];
    console.log(fnc(matrix));
  
  