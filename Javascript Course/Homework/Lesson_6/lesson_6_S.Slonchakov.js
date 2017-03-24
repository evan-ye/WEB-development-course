function priceSumm(input){

	var options= {
		floorMax: 5,
		aprtmentMax: 5,
		priceMax: 10,

	};

	var messages = {

		LongMatrix: 'Quantity of floors has to be less then 6',
		LongFloor: 'Quantity of apartments has to be less then 6',
		highPrice: 'Price of apartment has to be less then 11',
		lowFloorsLength: 'Quantity of floors has to be more then 1'

	}

	var error = '';

	if( !Array.isArray(input) || !input.length) return messages.lowFloorsLength;

	if(input.length > options.floorMax ) return messages.LongMatrix;
	if(input[0].length > options.aprtmentMax ) return messages.LongFloor;

	input[0].forEach(function(elem){
		if(elem > 10 ){
			error = messages.highPrice;
		}
	})

	var summ = input[0].reduce(function(a,b){return a+b;}), floorLength = 0;

	if(input.length == 1) return summ;

	floorLength = (input[0].length > options.aprtmentMax) ? options.aprtmentMax : input[0].length;

    input.reduce(function(previousValue, currentValue, index, array) {
    	
    	for(var i = 0; i < floorLength; i++){

			if(currentValue[i] > options.priceMax) error = messages.highPrice;

			( previousValue[i] != 0 )? summ += currentValue[i] : currentValue[i] = 0;

    	}

	  	return currentValue;
	});

	if(error.length){
		return error;
	}

    return summ;
}

console.log(priceSumm([[0, 1, 1, 2], [0, 5, 0, 0], [2, 0, 3, 3]])); // 9
console.log(priceSumm([[0, 1, 1, 2], [0, 5, 1, 1], [2,4,1,1],[2, 1, 3, 3]])); // 24

console.log(priceSumm("Fake input")); 
console.log(priceSumm([])); 
console.log(priceSumm([[0, 1, 1, 2]])); 
console.log(priceSumm([[0, 1, 1, 2],[0, 1, 1, 2],[0, 1, 1, 2],[0, 1, 1, 2],[0, 1, 1, 2],[0, 1, 1, 2]])); // count of floors is 6
console.log(priceSumm([[11, 1, 1, 2],[0, 1, 1, 1],[0, 1, 1, 2],[0, 1, 1, 2],[0, 1, 1, 2]]));  // price more then 10
