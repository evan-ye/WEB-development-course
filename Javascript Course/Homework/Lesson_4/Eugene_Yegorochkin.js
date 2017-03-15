function missingNumbers(arr) {
    var result = []

    function compare(a, b) {
        return a - b;
    }
    var sortArr = arr.sort(compare).reverse()

    sortArr.forEach(function(item, i, arr) {
        result.push((sortArr[i] - sortArr[i + 1]) - 1)
    })

    var positiveArr = result.filter(function(number) {
        return number > 0;
    })

    result = positiveArr.reduce(function(sum, current) {
        return sum + current
    })

    console.log(result)

}

missingNumbers([6, 2, 3, 8])
