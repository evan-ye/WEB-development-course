function priceSumm(input){

	if( !Array.isArray(input) || !input.length) return 'Wrong input';

	var summ = 0, floorLength = 0;

	if(input.length == 1) {

		return summ = input[0].reduce(function(a,b){return a+b;});

	}

	floorLength = input[0].length;

    input.reduce(function(previousValue, currentValue, index, array) {

    	for(var i = 0; i < floorLength; i++){

			(previousValue[i] == 0) ? array[index][i] = 0 : summ += previousValue[i];

    	}

	  	return currentValue;
	});

    return summ;
}

console.log(priceSumm("Fake input")); 
console.log(priceSumm([])); 
console.log(priceSumm([[0, 1, 1, 2]])); 
console.log(priceSumm([[0, 1, 1, 2], [0, 5, 0, 0], [2, 0, 3, 3]])); // 9
console.log(priceSumm([[0, 1, 1, 2], [0, 5, 0, 0], [2,4,1,1],[2, 0, 3, 3]])); // 13