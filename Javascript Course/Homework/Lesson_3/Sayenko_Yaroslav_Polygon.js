function Polygon(n)
{
  if (n <= 0 || isNaN(n)) {
  	return false;
  }
  var square = 1;
  for (var i = 0; i <= n-1; i++){
  square = square + 4*i;
  }
  return square;
}
Polygon(4)
