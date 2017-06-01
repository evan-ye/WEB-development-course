function getLongestStrings(array) {
  var maxLength = 0,
      longestStrings = [];
  for (var i=0; i<array.length; i++) {
    if (array[i].length > maxLength) {
      longestStrings.splice(0,array.length-1,array[i]);
      maxLength = array[i].length;
    } else if (array[i].length == maxLength) {
      longestStrings.push(array[i]);
    }
    console.log(longestStrings);
  }
  return longestStrings;
}
