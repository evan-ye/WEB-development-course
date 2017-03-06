function getMaxCouple(array) {
  var maxCouple = 0;
  
  for (var key = 0; key < array.length-1; key++) {
    var temp = array[key] * array[+key+1];
    if (maxCouple < temp) {
      maxCouple = temp;
    }
  }
  
  return maxCouple;
}
