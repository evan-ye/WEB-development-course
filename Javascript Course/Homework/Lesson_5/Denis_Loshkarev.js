function isSortedArray(array) {
    if (!Array.isArray(array)) return false;

    var delIndex = -1;

    if (array[0] > array[1]) delIndex = 0;

    for(var i = 1; i < array.length; i++) {

        var prev = array[i-1];
        if (delIndex == 0 && i == 1) {
            prev = Number.MIN_SAFE_INTEGER;
        } else if (i-1 == delIndex) {
            prev = array[i-2];
        }

        if (array[i] < prev) {
            if (delIndex == -1) {
                delIndex = i;
            } else {
                return false;
            }
        }
    }

    return true;
}

var array = [3, 2, 1, 4];
console.log(array, isSortedArray(array));

array = [3, 2, 2, 4];
console.log(array, isSortedArray(array));

array = [3, 2, 1, 4];
console.log(array, isSortedArray(array));

array = [1, 2, 1, 2];
console.log(array, isSortedArray(array));