function showTheBiggest(numbers) {
	var max = numbers[0]*numbers[1];
	for (var i = 0; i < numbers.length; i++){
		showTheBiggest = numbers[i] * numbers[i+1]
		if (showTheBiggest > max){
			max = showTheBiggest
		}
	}
	return max;
}
var numbers = [30, 6, -2, -50, 7, 3];

alert(showTheBiggest(numbers));