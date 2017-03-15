function completeSequence(array) {
  function compare(a, b) { return a-b; }
  
  var max = Math.max.apply(null, array),
      min = Math.min.apply(null, array),
      missing = [];

  for (var i=min; i<=max; i++) {
    var mismatches = 0;
    
    for (var u=0; u<array.length; u++) {
      if (i != array[u]) {
        mismatches++;
      } else {
        break;
      }
    }
    
    if (mismatches == array.length) {
      missing.push(i);
    }
  }
  
  return missing.length;
}
