function getLuckyTicket (ticket) {
	if (+ticket < 10 && +ticket > Math.pow(10, 6)) {
		return false;
	} else {
		var splitTicket = ticket.toString(10).split(''),
			firstPartTicket = splitTicket.splice(0, (splitTicket.length / 2)),
			firstResult = 0,
			secondResult = 0;

		for (var i = 0; i < firstPartTicket.length; i++) {
			firstResult += +firstPartTicket[i];
		}

		for (var j = 0; j < splitTicket.length; j++) {
			secondResult += +splitTicket[j];
		}

		if (firstResult === secondResult) {
			return true;
		} else {
			return false;
		}
	}
}