function isLucky(number){
  number = number.toString();
  if (number.length%2 == 1 || number < 10 || number > 1000000) {
    return 'Error! Input the valid ticket number.';
  }
  else {
    var sum1 = 0;
    var sum2 = 0;
    for (var i = 0; i < number.length/2; i++) {
      sum1 += parseInt(number[i]);
      sum2 += parseInt(number[number.length - 1 - i]);
    }
    return (sum1 == sum2);
  }
}
var number = 8154;
isLucky(number);
