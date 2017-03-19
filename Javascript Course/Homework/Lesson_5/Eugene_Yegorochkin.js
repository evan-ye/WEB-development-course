function numb(arr) {

    if (arr.length <= 1) {
        return false
    }
    var count = [];
    
    for (var i = 0; i < arr.length - 1; i++) {

        if (arr.length == 2 && arr[0] >= arr[1]) {
            return false
        } else if (arr[i] >= arr[i + 1] || arr[i] === undefined || arr[arr.length - 1] === undefined) {
            count.push(1)
        } else if (arr[i] >= arr[i + 1] || arr[i] >= arr[i + 2]) {
            arr.splice(i + 2, 1)
            count.push(1)
        }
    }
    return !(count.length > 1)
}

numb([1, 3, 2])
