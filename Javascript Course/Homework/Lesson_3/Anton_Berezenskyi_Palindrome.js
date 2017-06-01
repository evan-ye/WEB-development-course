function checkPalindrome (str) {
	var arr = str.split('');
	var newarr = arr.slice(0, Math.floor(arr.length/2));
	var newarr2 = arr.slice(Math.ceil(arr.length/2), arr.length).reverse();
	if (newarr.length === newarr2.length) {
		var match = 0;
		for (var i = 0; i < newarr.length; i++) {
			if (newarr[i] === newarr2[i]) {
				match++;
			}
		}
		return match === newarr.length ? true : false;
	}
}