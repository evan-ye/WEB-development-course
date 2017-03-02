// Задача
// Написать функцию на javascript, 
// которая принимает на входе массив, находит пару соседних элементов, 
// произведение которых является максимальным, 
// и возвращает значение этого произведения.

// Пример
// Для массива [30, 6, -2, -50, 7, 3], 
// функция вернет 180, поскольку произведение 30 и 6 является 
// максимальным среди произведений всех соседних элементов.


function getMaxMulti(inputArray)
{
	if(!Array.isArray(inputArray)) return "Inputed value is not array";

	var answer = 0,
		elems  = '';

	for (var x in inputArray){

		var currentElem = inputArray[x],
			nextElem    = inputArray[+x+1];

		if( currentElem * nextElem >  answer ){

				answer = currentElem * nextElem;

				elems  = currentElem +'x'+ nextElem;
		}

	}

	return elems+' = '+answer;
}

console.log(getMaxMulti([30,6,-2,-50,7,3]));
console.log(getMaxMulti([-2,-50,7,3,30,6]));
console.log(getMaxMulti([-40,50,7,3,10,6]));
console.log(getMaxMulti([-2,15,44,8,19,4]));
console.log(getMaxMulti(333));