function missedNumbers(ar){
  var finish = Math.max.apply(null, ar);
  var start = Math.min.apply(null, ar);
  var kol = finish - start + 1;
  return kol - ar.length;
 }

var ar = [6, 2, 3, 8];
alert('Не хватает ' + missedNumbers(ar) + ' элементов.');
