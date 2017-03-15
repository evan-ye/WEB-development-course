function missedNumbers(ar){
  var finish = Math.max.apply(null, ar);
  var start = Math.min.apply(null, ar);
  ar2 = ar.slice();
  ar2.sort();
  i = ar2.length;
  while (i--) {
    if (ar2[i] == ar2[i - 1]){
        ar2.splice(i, 1);
    }
  }
  var kol = finish - start + 1;
  return kol - ar2.length;
 }

var ar = [6, 2, 3, 8];
alert('Не хватает ' + missedNumbers(ar) + ' элементов.');
