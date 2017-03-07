function Polygon(n)
{
  if (n <= 0 || isNaN(n)) {
  	return 'Введите любое положительное число, включая ноль!';
  }

  var area = 1;

  for (var i = 1; i <= n; i++){
  area = area + 4*i;
  }

  return area;
}

var n = prompt('Введите n:', '');
Polygon(n);


