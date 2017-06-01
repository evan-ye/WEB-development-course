matrix = [[0, 1, 1, 2],
          [0, 5, 0, 0],
          [2, 0, 3, 3]];

function buildingPrice(building) {
    if (!Array.isArray(building)) {
        return false;
    }
    var price = 0;
    for(var riser = 0; riser < building[0].length; riser++) {
        for (var floor = 0; floor < building.length; floor++) {
            var flatPrice = building[floor][riser];
            if (!Number.isInteger(flatPrice) || flatPrice === 0) break;
            price += flatPrice;
        }
    }
    return price;
}

console.log(buildingPrice(matrix));