var arrr = [30, 6, -2, -50, 7, 3];
function getMaxMult(arr) {
	var newArr = [],
		previousCurrent = 1,
		maxInArr = 0;
	for (var i = 0; i < arr.length; i++) {
		newArr.push(previousCurrent * arr[i]);
		previousCurrent = arr[i];
		if (newArr[i] > maxInArr) {
			maxInArr = newArr[i];
		}
	}
	return maxInArr;
}
getMaxMult(arrr);