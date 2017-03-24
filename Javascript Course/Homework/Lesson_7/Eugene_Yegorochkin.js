function getMaxStrings(str) {
    var result = []

    function compare(a, b) {
        return a.length - b.length;
    }

    var sortedArray = str.sort(compare)

    var lastItemOfSortedArray = sortedArray[sortedArray.length - 1]

    for (var i = 0; i < str.length; i++) {
        if (str[i].length === lastItemOfSortedArray.length) {
            result.push(str[i])
        }
    }
    return result
}

getMaxStrings(["aba", "aa", "ad", "vcd", "aba"])
