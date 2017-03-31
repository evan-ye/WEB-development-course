function bingo(ticket) {
    ticket += ''
    var ticketArray = []

    if (ticket.length % 2) {
        return false
    }

    for (var i = 0; i < ticket.length; i++) {
        ticketArray.push(+ticket[i])
        var firstPartOfTicket = ticketArray.slice(0, ticketArray.length / 2)
        var secondPartOfTicket = ticketArray.slice(ticketArray.length / 2, ticketArray.length)
    }

    firstPartOfTicket.reduce(function(sum, current) {
        firstPartOfTicket = sum + current
    });
    secondPartOfTicket.reduce(function(sum, current) {
        secondPartOfTicket = sum + current
    });
    return firstPartOfTicket == secondPartOfTicket
}
bingo(1230)
