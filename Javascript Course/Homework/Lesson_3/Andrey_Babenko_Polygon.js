function getPolygonSquare(n) {
  if (n <= 0 || isNaN(n)) {
    return 0;
  }
  
  var square = 1;
  for (i = 2; i <= n; i++) {
    square += (i-1)*4;
  }
  
  return square;
}
