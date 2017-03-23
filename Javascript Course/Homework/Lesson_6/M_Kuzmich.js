function count(house){
if (typeof house != 'object' || house === undefined)
	return 'Only arrays allowed';
else if (house.length < 1 || house.length > 5)
	return 'there must be 1 - 5 floors in house';
else if (house[0].length < 1 || house[0].length > 5)
	return 'there must be 1 - 5 appartment on the floor';
// 1 ≤ matrix.length ≤ 5,
// 1 ≤ matrix[i].length ≤ 5,
// 0 ≤ matrix[i][j] ≤ 10.
var levels = [],
p = 0,
totalPrice = 0;

for(i=0; i<house[0].length; i++){
	var line = [];
	for(j=0; j<house.length; j++){
		line.push(house[j][i])
	}
	levels.push(line)
}
for(i=0; i<levels.length;i++){
	for(j=0; j<levels[i].length; j++){
		price = levels[i][j];
		if(price === 0){
			break;
		}
		else if(price > 10 || price < 0){
			return 'price must be in range from 0 to 10';
		}
		else{
			totalPrice += price;
		}
	}
}
return totalPrice;
}
matrix = [
[0, 1, 1, 2], 
[0, 5, 0, 0], 
[2, 0, 3, 3]
];
count(matrix)