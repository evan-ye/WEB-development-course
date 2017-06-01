// Задача
// Написать функцию на javascript, которая принимает на входе значение, исследуемого года и возвращает порядковый номер века в котором находится этот год. 
// Первый век занимает промежуток от 1-го до 100-го года включительно.
// Второй век - это промежуток от 101-го до 200-го года включительно и т.д.

// Пример
// * Для 1905-го года, функция вернет 20;
// * Для 1700-го, функция вернет 17.

// Доп. условие
// Год на входе должен находится в промежутке от 1 до 2017, в противном случае функция должна вернуть сообщение "Год указан не правильно"

function getCentury(input){

	var minLimit     = 1,
		maxLimit     = 2017,
		parsedInput  = null,
		inputString  = '',
		error        = 'Год указан не правильно',
		lastElem,
		answer;

	if(input < minLimit || input > maxLimit) {
		answer = error;
		
	} else if(input < 101){

		answer = 1;

	} else {

	    inputString += input;

	    lastElem = inputString[inputString.length - 1];

		parsedInput = inputString.substring(0, inputString.length - 2);

		switch(lastElem){
			case '0': 

				answer = parsedInput;
				break;

			default:

				answer = parseInt(parsedInput) + 1;
				break;
		}
		
	}

	console.log(answer);

}


getCentury(1);
getCentury(1700);
getCentury(1905);
getCentury(2018);