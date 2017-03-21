function checkOreder(arr) {
  var result = false;
  for(var i = 0;i<arr.length;i++){
    var newArr = arr.slice();
    newArr.splice(i,1);
    if(compare(newArr)) {
      result = true;
    }
  }

  function compare(array) { 
    for (var j = 0; j < array.length; j++) { 
      if (array[j] >= array[j + 1]) { 
        return false; 
      } 
    } 
    return true; 
  } 

  return result;
}

console.log (checkOreder( [10, 1, 2, 3, 1] ));
console.log (checkOreder( [1, 1, 1] ));
console.log (checkOreder( [1, 2, 11, 5] ));
