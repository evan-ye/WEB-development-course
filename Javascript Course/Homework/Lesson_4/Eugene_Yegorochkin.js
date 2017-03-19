//a little bit shorter version
function missingNumbers(arr) {
    var result = []

    function compare(a, b) {
        return a - b;
    }
    var sortArr = arr.sort(compare).reverse()

    for (var i = 0; i< sortArr.length - 1; i++) {
        result.push((sortArr[i] - sortArr[i + 1]) - 1)
    }

    result = result.reduce(function(sum, current) {
        return sum + current
    })

    console.log(result)

}

missingNumbers([6, 2, 3, 8])
