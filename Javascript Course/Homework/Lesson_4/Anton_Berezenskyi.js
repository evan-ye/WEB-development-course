function getMissingNumbs (arr) {
	var newArr = arr.sort(function(a,b){
		return a - b;
	});
	return (newArr[newArr.length-1] - (newArr[0] - 1)) - newArr.length;
}

getMissingNumbs([6, 2, 3, 8]);