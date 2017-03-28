function getLongestStrings(input){

	var options = {
		alertMsg: 'Input is not array'
	};

	if( !Array.isArray(input) ) return options.alertMsg;

	if( input.length == 1 ) return input;

	var answerArray = new Array();

	input.forEach(function(item){

		if( answerArray.length ){

			if( item.length < answerArray[0].length ) return;
			if( item.length > answerArray[0].length ) answerArray.length = 0;

		}

		answerArray.push(item);
		
	})

	return answerArray;
}


console.log(getLongestStrings('["aba", "aass", "ad", "vcdss", "abass"]'))

console.log(getLongestStrings(["aba"]))

console.log(getLongestStrings(["aba", "aba",  "aass", "ad", "vcdss", "abass"]))
console.log(getLongestStrings(["aba", "aba", "ad", "vcd", "aba"]))
console.log(getLongestStrings(["aba", "aa", "ad", "vcd", "abass"]))