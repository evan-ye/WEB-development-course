var ar = [30, 6, -2, -50, 7, 3];

function getMaxMultPair(ar)
{
  var max = ar[0]*ar[1];
  for (i = 0;i<ar.length;i = i+2)
  {
    if (ar[i]*ar[i+1] > max) max = ar[i]*ar[i+1];
  }
  return max;
}
getMaxMultPair(ar);
