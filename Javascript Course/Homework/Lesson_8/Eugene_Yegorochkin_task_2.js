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

    var SumOfFirstPartOfTicket = firstPartOfTicket.reduce(function(sum, current) {
        return sum + current
    });
    var SumOfSecondPartOfTicket =secondPartOfTicket.reduce(function(sum, current) {
        return sum + current
    });

    return SumOfFirstPartOfTicket == SumOfSecondPartOfTicket
}
bingo(134008)
