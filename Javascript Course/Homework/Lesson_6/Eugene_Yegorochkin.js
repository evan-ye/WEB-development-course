function getPrice(apartments) {
    totalPrice = 0
    if (apartments.length > 5 || apartments.length < 1) {
        return "Enter correct numbers of floors. It must be from 1 to 5"
    }
    for (var j = 0; j < apartments[0].length; j++) {
        for (var i = 0; i < apartments.length; i++) {

            if (apartments[i] > 5 || apartments[i] < 1) {
                return "Enter correct numbers of apartments. It must be from 1 to 5"
            }
            if (apartments[i][j] > 10 || apartments[i][j] < 0) {
                return "Enter correct prices of apartments. It must be from 0 to 10"
            }
            if (apartments[i][j] > 0) {
                totalPrice += apartments[i][j]
            } else {
                break;
            }
        }
    }
    return totalPrice
}

getPrice([
    [1, 0, 0, 10],
    [0, 3, 6, 10],
    [2, 0, 3, 3]])
