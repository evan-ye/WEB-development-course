function price(ar){
  var sum = 0;
  if (ar === undefined) return 'Введите схему дома.';
  if (ar.length < 1 || ar.length > 5) {
    return 'Введите корректное количество этажей (от 1 до 5).';
  }
  for (var i = 0; i < ar[0].length; i++) {
 	  for (var j = 0; j < ar.length; j++) {
 	    if (ar[j].length<1 || ar[j].length>5) {
 	      return 'Введите корректное количество квартир на этаже (от 1 до 5).';
 	    }
	    if (ar[j][i] < 0 || ar[j][i] > 10) {
	      return 'Введите корректную стоимость квартиры (от 0 до 10).';
	    }
	    if (ar[j][i] > 0) {
		    sum += ar[j][i];
		  }
		  else {
		    break;
		  }
		}
  }
return sum;
}
var ar =[
        [0, 1, 1, 2], 
        [0, 5, 0, 0], 
        [2, 0, 3, 3] 
];
price(ar);
