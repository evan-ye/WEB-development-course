function isDifference (ar){
  var max = Math.max.apply(null, ar);
  var min = Math.min.apply(null, ar);
  var diff = max - min;
  var long = ar.length;
  return console.log (diff - (long - 1));
}

var numbers = [6, 2, 3, 8];
isDifference (numbers);
