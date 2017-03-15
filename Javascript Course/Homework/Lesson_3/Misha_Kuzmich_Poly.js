function isPolyndrome(text){
	string = text.toString().toLowerCase();
	if(!string){
		return 'Ошибка. Получена пустая строка.'
	}
	var mid = (string.length-1)/2;
	var part1 = string.split('').slice(0, mid).join("");
	var part2 = string.split('').slice(mid+1).reverse().join("");

	if(part1 != part2){
		return false;
	}
	else{
		return true;
	}

}
var text = 'арозаупаланалапуазора';
isPolyndrome(text);