function chechTicket(ticketNum){
	ticketNum = ticketNum.toString();
	if(ticketNum.length%2 !== 0 || ticketNum.length <= 2 || ticketNum.length >= 6){
		return 'error: Only number with even quantity of symbols in range 10..10^6 allowed';    
	}
	else{
		part1 = ticketNum.split('').slice(0,ticketNum.length/2).reduce((a, b) => parseInt(a,10) + parseInt(b,10), 0);
		part2 = ticketNum.split('').slice(ticketNum.length/2).reduce((a, b) => parseInt(a,10) + parseInt(b,10), 0);
		return part1 == part2; 
	}
	
}
chechTicket(123321);