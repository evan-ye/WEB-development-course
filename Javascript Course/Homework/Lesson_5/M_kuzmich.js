function checkArray(arr){ 
	if(typeof arr != 'object' || arr.length < 2){
		return 'Функция принимает лишь массивы содержащие больше чем 1 элементов';
	}
	for(i=0; i < arr.length; i++){
		if (Number.isInteger(arr[i]) != true)
			return 'Массив должен состоять лишь из целых чисел'

	}
	for (i=0; i < arr.length - 1; i++) {
		if (arr[i + 1] < arr[i] &&  arr[i + 2] < arr[i]) {
			arr.splice(i, 1); 
		}
		else if (arr[i+1] < arr[i] ) {
			arr.splice(i + 1, 1);
		}
	}
	for (i = 0; i < arr.length-1; i++){
		if (arr[i+1] < arr[i] ) {
			return false;
		}
	}
	return true;
} 
var test;
var arr = [1,3,2,1];
console.log(checkArray(arr)); // false
console.log(checkArray([1,3,2])); //true
console.log(checkArray([2,4,6,1,3])); //false
console.log(checkArray([123,44,50,200])); //true
console.log(checkArray('asd')); // err
console.log(checkArray([])); //err
console.log(checkArray(test)); // err

