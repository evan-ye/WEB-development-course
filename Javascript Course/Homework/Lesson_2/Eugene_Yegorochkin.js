function getNumber(arr) {
    var result = [];
    arr.forEach(function(item, i, arr) {
        function compare(a, b) {
            return a - b;
        };
        result.sort(compare).reverse().push(arr[i] * arr[i + 1]);
    });
    return result[0];
};
getNumber([30, 6, -2, -50, 7, 3])
