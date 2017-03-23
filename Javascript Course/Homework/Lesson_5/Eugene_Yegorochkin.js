function numb(arr) {

if (arr.length === 0) {
            return false
        }
    var count = [];

    for (var i = 0; i < arr.length - 1; i++) {

         if (arr[i] >= arr[i + 1]) {
            count.push(1)
        } else if (arr[i] >= arr[i + 1] || arr[i] >= arr[i + 2]) {
            arr.splice(i + 2, 1)
            count.push(1)
        }
    }
    return !(count.length > 1)
}

numb( [1, 2, 1, 2])
