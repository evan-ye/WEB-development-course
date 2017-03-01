var arrr = [30, 6, -2, -50, 7, 3];
function getMaxMult(arr) {
	var newArr = [],
		previousCurrent = 1,
		maxInArr = 0;
	for (var i = 0; i < arr.length; i++) {
		newArr.push(previousCurrent * arr[i]);
		previousCurrent = arr[i];
	}
	for (var j = 0; j < newArr.length; j++) {
		if (newArr[j] > maxInArr) {
			maxInArr = newArr[j];
		}
	}
	return maxInArr;
}
getMaxMult(arrr);