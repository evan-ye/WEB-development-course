function getLongestStringsList(arr){
	var max=0,
	longestStrings = [];
	for(var i=0 ; i<arr.length ; i++){
		if(arr[i].length > max){
			longestStrings.length = 0;
			longestStrings.push(arr[i]);
			max = arr[i].length;
		} else if(arr[i].length === max){
			longestStrings.push(arr[i]);
		}
	}
	return longestStrings;
}
getLongestStringsList(["aba", "aa", "ad", "vcd", "aba"]);