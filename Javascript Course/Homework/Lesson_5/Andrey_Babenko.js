function possibleSequence(array) {
  if (array.length <= 0) {
    return false;
  }
  var mistake = 0;
  for (var i=0; i<array.length-1; i++) {
    if (array[0] >= array[1]) {
      mistake++;
      array.splice(0,1);
    } else if (array[i] <= array[i+1] && array[i] <= array[i-1]) {
      mistake++;
      array.splice(i,1);
      i--;
    } else if (array[i] < array[i+1]) {
      continue;
    } else if (array[i] >= array[i+1] && array[i] >= array[i+2]) {
      mistake++;
      array.splice(i,1);
      i--;
    } else {
      mistake++;
      array.splice(i+1,1);
      i--;
    }
  }
  return mistake <= 1;
}
