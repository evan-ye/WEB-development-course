function getAscSequence (arr) {
	if (arr.length <= 2) {
		return true;
	}
	var amountFalse = 0,
		removed;
	for (var i = 0; i < arr.length; i++) {
		if (i == 0) {
			removed = arr.splice(i, i+1);
		}
		else if (i == 1) {
			removed = arr.splice(i, i);
		}
		else {
			removed = arr.splice(i, ((i+1)-i));
		}
		var amountTrue = 0;
		for (var j = 0; j < arr.length-1; j++) {
			if (arr[j] < arr[j + 1]) {
				amountTrue++;
			}
			else {
				amountFalse++;
				break;
			}

			if (amountTrue == arr.length-1) {
				return true;
			}
		}
		if (amountFalse == (arr.length+1)) {
			return false;
		}
		arr.splice(i, 0, removed[0]);
	}
}