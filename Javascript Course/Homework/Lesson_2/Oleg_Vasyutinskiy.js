
var newArray = [23, 2, 12, 9, -5, 30];

function ArrCompare(newArray) {

    maxEL = newArray[0] * newArray[1];

    for (i = 0; i < newArray.length; i++) {
        ArrCompare = newArray[i] * newArray[i+1];
        if (ArrCompare > maxEL){
            maxEL = ArrCompare;
        }

    }
    return maxEL;

}

console.log(ArrCompare(newArray));