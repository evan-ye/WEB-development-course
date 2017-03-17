function possibleSequence(array) {
  if (array.length <= 0) {
    return false;
  }
  if (array.length == 2 && array[0] > array[1]) {
    return false;
  }
  var mistake = 0;
  for (var i=0; i<array.length-1; i++) {
    if (array[i] < array[i+1]) {
      continue;
    }
  mistake++; 
  }
  var answer = mistake <= 1 ? true : false;
  return answer;
}
