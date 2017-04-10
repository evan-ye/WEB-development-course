function isLuckyTicket(ticketNumber) {
  ticketNumber = ticketNumber.toString();
  if (ticketNumber < 10 || ticketNumber > 1000000 || ticketNumber.length%2 == 1) {
    return 'Wrong ticket number';
  }
  var luckySum = 0;
  for (var i=0;i<ticketNumber.length;i++) {
    luckySum += i<ticketNumber.length/2 ? +ticketNumber[i] : -(+ticketNumber[i]);
  }
  return !luckySum;
}
